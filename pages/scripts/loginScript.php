<?php
session_start();
include('../../publicFiles/conn.php');

if(isset($_POST['submit'])){



$Email = $_POST['Email'];
$userPassword = $_POST['Password'];




$errEmpty = false;


$errorEmail = false;


        if(empty($Email) || empty($userPassword))
        {

            echo "<span class='error'>Fill all Feilds</span>";

            $errEmpty
 = true;
            
        }else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){

            echo "<span class='error'>Fill Valid Email</span>";

            $errorEmail = true;


        }else{

                

                $errEmpty = false;


                $errorEmail = false;

                $sql = "SELECT id FROM Users where Email = '$Email' And Password = '$userPassword'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    $id = $row['id'];

                    $_SESSION['id'] = $id;

                   

                    $sql = "SELECT isgroupLeader  FROM Users where id = '$id' ";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        $row = $result->fetch_assoc();

                        $isgroupLeader = $row['isgroupLeader'];

                        $_SESSION['groupLEADER'] = $isgroupLeader;

                        // echo $_SESSION['groupLEADER'];
                        // die();

                       

                    }

                    $sql = "SELECT * FROM `Profile` WHERE  id = '$id' ";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        $row = $result->fetch_assoc();

                        $_group = $row['group'];

                        $_SESSION['group'] = $_group;

                       

                        // echo $_SESSION['groupLEADER'];
                        // die();

                       

                    }


                    $sql = "SELECT `Status`  FROM Users where id = '$id' ";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) 
                    {

                        $row = $result->fetch_assoc();

                        $status = $row['Status'];

                        if($status === '0'){

                            $_SESSION['status'] = $status;

                        }

                       

                        // echo $_SESSION['status'];
                        // die();

                       

                    }

                    $getGroup_id = "SELECT * FROM `GroupDetails` WHERE `groupLeader_id` = '$id'";
                    $return = $conn->query($getGroup_id);

                    if($return->num_rows>0){
                        $row = $return->fetch_assoc();

                        $hasGroup = $row['groupLeader_id'];

                        $_SESSION['hasNOtGroup'] = $hasGroup;

                       

                        //echo $_SESSION['hasGroup'];
                        
                        

                     }else if ($return->num_rows <= 0){

                        $hasGroup = "no group";

                        $_SESSION['hasGroup'] = $hasGroup;

                       
                       
                     }
                        
                        

                    //     die();

                    

                    


                    

                  

                    echo "

          <a style='text-decoration:none; font-family: montserrat; color:white !important; font-size:20px !important;' href='../profiles/index.php?page=Timeline' >

          Proceed to Dashboard ? 

          </a>
          

          " ;



                }else{
                    // echo "Error: " . $sql . "<br>" . $conn->error;

                    echo "Invalid Details";
                }

                }
            


}else{
echo "There was a problem";
}


?>

<script>


$("#email-validation,#password-validation").removeClass("inputError"); 

let errEmpty
 = "<?php echo  $errEmpty
; ?>"

let errorEmail = "<?php echo  $errorEmail; ?>" 

if(errEmpty
 == true){
$("#email-validation,#password-validation").addClass("inputError");
}

if(errorEmail == true){
$("#email-validation").addClass("inputError");

}

if(errEmpty
 == false && errorEmail == false){
$("#email-validation,#password-validation").val("");

}


</script>




