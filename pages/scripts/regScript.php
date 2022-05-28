<?php

if(isset($_POST['submit'])){

    $firstName = $_POST['Firstname'];
    $lastName = $_POST['Lastname'];
    $Email = $_POST['Email'];
    $userName = $_POST['Username'];
    $userPassword = $_POST['Password'];
    $userRetypePass = $_POST['PasswordRetype'];
    $userPhoneNumber = $_POST['PhoneNumber'];
    $isWhatsapp = $_POST['WhatsappLine'];



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

        echo "<span class='success'>SUCCESS</span>";

        $errorEmpty = false;


        $errorEmail = false;

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




