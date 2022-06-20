<?php
session_start();

include('./config.php');



//updating user profile
if (!empty($_POST['submitProfile'])) {

    // print_r($_POST);
    // die();

    $id = $_POST['id'];

    $gender = $_POST['gender'];

    $firstName = $_POST['firstName'];

    $lastName = $_POST['lastName'];



    $bio =   $_POST['bio'];

    $dob =   $_POST['dob'];

    $role = $_POST['role'];

    $file = $_FILES["profile_pic"];


    if (!$file["error"]) {
        try {
            $filename = $file["name"];
            $des = "../users_img/";
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $rand = time();
            $filename = $rand . "." . $extension;

            $main_file = $file["tmp_name"];

            $moved = move_uploaded_file($main_file, $des . $filename);

            if ($moved) {



                $sql = "SELECT  `Status` FROM `Users`  where id = '$id' ";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    $row = $result->fetch_assoc();

                    $status = $row['Status'];

                    if ($status === '0') {

                        $sql_update = "INSERT INTO `Profile` ( `id`, `firstName`, `lastName`, `about`, `gender`, `dob`, `group`, `role`, `profile_pic`) VALUES ('$id','$firstName','$lastName','$bio','$gender','$dob',NULL,'$role','$filename')";
                        $result_update = mysqli_query($conn, $sql_update);

                        if ($result_update) {

                            $status = 1;

                            $sql_updated = "UPDATE `Users` SET `Status` = '$status' WHERE `id` = '$id'";

                            $result_updated = mysqli_query($conn, $sql_updated);
                        }

                        header("Location:../profile.php");
                    } else {

                        $sql_update = "UPDATE `Profile` SET `firstName`='$firstName',`lastName`='$lastName',`about`='$bio',`gender`='$gender',`dob`='$dob',`role`='$role',`profile_pic`='$filename' WHERE `id` = '$id'";
                        $result_update = mysqli_query($conn, $sql_update);

                        header("Location:../profile.php");
                    }
                }
            }
        } catch (PDOException $e) {
            header("Location: ../profile.php?msg=Your file is");
            die();
            echo $sql . "<br>" . $e->getMessage();
        }
    }
};


//creation of group
if (!empty($_POST['createGroup'])) {

    // print_r($_POST);
    // die();

    $id = $_POST['id'];



    $groupName = $_POST['groupName'];



    $file = $_FILES["group_pic"];


    if (!$file["error"]) {
        try {
            $filename = $file["name"];
            $des = "../users_img/";
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $rand = time();
            $filename = $rand . "." . $extension;

            $main_file = $file["tmp_name"];

            $moved = move_uploaded_file($main_file, $des . $filename);

            if ($moved) {
                $sql_update = "INSERT INTO `GroupDetails` ( `groupName`, `groupLeader_id`, `groupProfile`) VALUES ('$groupName','$id','$filename')";
                $result_update = mysqli_query($conn, $sql_update);

                $updateGroup = "UPDATE `Profile` SET `group`='$groupName' WHERE `id` = $id";
                $group_update = mysqli_query($conn, $updateGroup);



                header("Location:../group.php");
            }
        } catch (PDOException $e) {
            header("Location: ../profile.php?msg=Your file is");
            die();
            echo $sql . "<br>" . $e->getMessage();
        }
    }
};




if ($_REQUEST['action'] === 'sendReq') {

    $recieverId = $_REQUEST['id'];
    $senderId =  $_SESSION['id'];
    $datesent = date('Y-m-d');
    $status = 3;

    $sql = "INSERT INTO `Requests`(`senderId`, `recieverId`, `status`, `datesent`) VALUES ('$senderId','$recieverId','$status','$datesent')";
    $sql_result = mysqli_query($conn, $sql);

    if ($sql_result) {



        $sql_profile = "SELECT * FROM profile where id = '$senderId'";
        $result_profile = mysqli_query($conn, $sql_profile);


        $row_profile = mysqli_fetch_assoc($result_profile);

        $name = $row_profile['firstName'] . " " . $row_profile['lastName'];

        $group = $row_profile['group'];

        $message = $name . " Requests You Join His Group  " . $group;

        $isread = 0;

        $notify = "INSERT INTO `Notification`(`not_frm`,`not_to`,`message`,`isRead`,`date_Added`) 
                    VALUES ('$senderId','$recieverId','$message','$isread','$datesent')";
        $notify_result = mysqli_query($conn, $notify);



        $success = "Request Sent Successfully";
    } else {
        $success =   "Request Failed  :" . $sql_result . "<br>" . mysqli_error($conn);
    }

    echo $success;
}





if ($_REQUEST['action'] === 'acceptReq') {


    // echo "Request Sent Successfully";
    // die();

    $senderId  = $_REQUEST['id'];
    $recieverId =  $_SESSION['id'];
    $daterecieved = date('Y-m-d');
    $status = 1;


    $sql_profile = "SELECT * FROM profile where id = '$senderId'";
    $result_profile = mysqli_query($conn, $sql_profile);


    $row_profile = mysqli_fetch_assoc($result_profile);



    $Sendergroup = $row_profile['group'];

    $sql = "UPDATE `Requests` SET `status`='$status',`dateAccepted`='$daterecieved' WHERE `recieverId`='$recieverId'";

    $sql_result = mysqli_query($conn, $sql);

    if ($sql_result) {
        $updateGroup_query = "UPDATE `Profile` SET `group` = '$Sendergroup'";
        $updateGroup_query_action = mysqli_query($conn, $updateGroup_query);

        $sql_profile = "SELECT * FROM profile where id = '$recieverId'";
        $result_profile = mysqli_query($conn, $sql_profile);


        $row_profile = mysqli_fetch_assoc($result_profile);

        $name = $row_profile['firstName'] . " " . $row_profile['lastName'];

        $group = $row_profile['group'];

        $message = $name . " Accepted To Join your Your Group  " . $group;

        $isread = 1;

        $notify = "INSERT INTO `Notification`(`not_frm`,`not_to`,`message`,`isRead`,`date_Added`) 
                        VALUES ('$recieverId','$senderId','$message','$isread','$daterecieved ')";
        $notify_result = mysqli_query($conn, $notify);

        $deleteNot =  "DELETE FROM `Notification` WHERE `not_to` = '$recieverId'"; 
        $deleteNot_result = mysqli_query($conn, $deleteNot);




        $success = "Request Sent Successfully";
    } else {
        $success =   "Request Failed  :" . $sql_result . "<br>" . mysqli_error($conn);
    }


    echo $success;
}


if ($_REQUEST['action'] === 'declineReq') {

    // echo "Request Sent Successfully";
    // die();

    $senderId  = $_REQUEST['id'];
    $recieverId =  $_SESSION['id'];
    $daterecieved = date('Y-m-d');
    $status = 0;


    

    $sql = "UPDATE `Requests` SET `status`='$status',`dateAccepted`='$daterecieved' WHERE `recieverId`='$recieverId'";
    $sql_result = mysqli_query($conn, $sql);

    if ($sql_result) {



       



        $sql_profile = "SELECT * FROM profile where id = '$recieverId'";
        $result_profile = mysqli_query($conn, $sql_profile);


        $row_profile = mysqli_fetch_assoc($result_profile);

        $name = $row_profile['firstName'] . " " . $row_profile['lastName'];

        $group = $row_profile['group'];

        $message = $name . " Declined To Join  Your Group  " ;

        $isread = 1;

        $notify = "INSERT INTO `Notification`(`not_frm`,`not_to`,`message`,`isRead`,`date_Added`) 
                        VALUES ('$recieverId','$senderId','$message','$isread','$daterecieved')";
        $notify_result = mysqli_query($conn, $notify);

        $deleteNot =  "DELETE FROM `Notification` WHERE `not_to` = '$recieverId'"; 
        $deleteNot_result = mysqli_query($conn, $deleteNot);



        $success = "Request Sent Successfully";
    } else {
        $success =   "Request Failed  :" . $sql_result . "<br>" . mysqli_error($conn);
    }


    echo $success;
}
