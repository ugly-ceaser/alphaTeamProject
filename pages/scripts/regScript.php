<?php

include('../../publicFiles/conn.php');

if(isset($_POST['submit'])){

    $firstName = $_POST['Firstname'];
    $lastName = $_POST['Lastname'];
    $Email = $_POST['Email'];
    $userName = $_POST['Username'];
    $userPassword = $_POST['Password'];
    $userRetypePass = $_POST['PasswordRetype'];
    $userPhoneNumber = $_POST['PhoneNumber'];
     $isWhatsapp = $_POST['WhatsappLine'];
    //$isgroupLeader = false;


    $errorEmpty = false;


    $errorEmail = false;


    if(empty($firstName) || empty($lastName) || empty($Email) || empty($userName) || empty($userPassword) || empty($userRetypePass) || empty($userPhoneNumber))
    {

        echo "<span class='error'>Fill all Feilds</span>";

        $errorEmpty = true;
         
    }else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){

        echo "<span class='error'>Fill Valid Email</span>";

        $errorEmail = true;


    }else{

        

        $errorEmpty = false;


        $errorEmail = false;

        

       
        
        // $sql = "INSERT INTO Users (`Firstname`,`Lastname`,`Username`,`Email`,`Password`,`Phonenumber`,`whatsappline`,`isgroupLeader`) VALUES(,,,,,,,$isgroupLeader)";

        $sql = "INSERT INTO `Users` (`Firstname`, `Lastname`, `Username`, `Email`, `Password`, `Phonenumber`, `whatsappline`, `isgroupLeader`) VALUES ('$firstName', '$lastName', '$userName', '$Email', '$userPassword', '$userPhoneNumber', '$isWhatsapp', NULL)";

        // use exec() because no results are returned
        // $conn->exec($sql);


        if ($conn->query($sql) === TRUE) {
            //echo "New record created successfully";
          
           
          } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
          }

         
          echo "

          <a style='text-decoration:none; font-family: montserrat; color:white !important; font-size:20px !important;' href='./login.php' >

          Proceed to Login ?

          </a>

          ";

       




    }


}else{
    echo "There was a problem";
}




?>

<script>


$("#fname-validation,#lname-validation,#email-validation,#username-validation,#password-validation,#retypepasswod-validation,#phone-validation").removeClass("inputError"); 

let errorEmpty = "<?php echo  $errorEmpty; ?>"

let errorEmail = "<?php echo  $errorEmail; ?>" 

if(errorEmpty == true){
    $("#fname-validation,#lname-validation,#email-validation,#username-validation,#password-validation,#retypepasswod-validation,#phone-validation").addClass("inputError");
}

if(errorEmail == true){
    $("#email-validation").addClass("inputError");

}

if(errorEmpty == false && errorEmail == false){
    $("#fname-validation,#lname-validation,#email-validation,#username-validation,#password-validation,#retypepasswod-validation,#phone-validation").val("");

}


</script>




