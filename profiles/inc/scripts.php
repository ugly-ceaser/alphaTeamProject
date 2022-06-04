<?php

include('./config.php'); 




$sql_Users = "SELECT * FROM Users where id = '$id'";
$result_Users = mysqli_query($conn, $sql_Users);  

$row_Users = mysqli_fetch_assoc($result_Users); 


if(!empty($_POST['submitProfile'])){

    $id = $_POST['id'];
    $gender = $_POST['gender'];
    $bio =   $_POST['bio'];
    $dob =   $_POST['dob'];
    $role = $_POST['role'];
    $profile_pic = $_FILES['profile_pic'];




    if(!$profile_pic["file"]["error"]){
          try{
            $filename = $profile_pic["name"];
            $des = "../users_img";
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $rand = time();
            $filename = $rand . "." . $extension;
          
            $main_file = $profile_pic["tmp_name"];
          
            $moved = move_uploaded_file($main_file, $des.$filename);
      
          }catch(PDOException $e) {
              echo "somthing wrong with registration";
            echo $sql . "<br>" . $e->getMessage();
             }

     }  

       
            if($moved){
                $sql_update = "INSERT INTO `Profile` (`id`, `about`, `gender`, `dob`, `group`, `role`, `profile_pic`) VALUES ($id,$bio,$gender,$dob,NULL,$role,$profile_pic)";
                $result_update = mysqli_query($conn, $result_update);

                if($result_update){

                    $status = 1;

                    $sql_updated = "UPDATE `Users` SET `Status`='$status' WHERE 'id' = $id";

                    $result_updated = mysqli_query($conn, $result_updated);

                    header("Location:../profile.php?msg=Your Profile is Updated");
                }else{
                    header("Location:../profile.php?msg=Your Profile is not Updated");
                    
                }

            }

}