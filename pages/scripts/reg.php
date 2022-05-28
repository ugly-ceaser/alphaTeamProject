<?php



if(isset($_POST[$submit])){

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['userName '];
    $userName = $_POST['email'];
    $userPassword = $_POST['password'];
    $userRetypePass = $_POST['passwordConfirmation'];
    $userPhoneNumber = $_POST['userPhoneNumber'];
    $isWhatsapp = $_POST['CheckIfWhatsapp'];



    $errorEmpty = false;


    $errorEmail = false;


    if(empty($firstName) || empty($lastName) || empty($email) || empty($userName) || empty($userPassword) || empty($userRetypePass) || empty($userPhoneNumber))
    {

        echo "<span class='error'>Fill all Feilds</span>";

        $errorEmpty = true;
         
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        echo "<span class='error'>Fill Valid Email</span>";

        $errorEmail = true;


    }else{

        echo "<span class='succes'>SUCCESS</span>";

        $errorEmpty = false;


        $errorEmail = false;

    }


}else{
    echo "There was a problem";
}


?>

<script>


$("#fname-validation,#lname-validation,#email-validation,#userName-validation,#password-validation,#retypepasswod-validation,#phone-validation,").removeClass("inputError"); 

let errorEmpty = "<?php echo  $errorEmpty; ?>"

let errorEmail = "<?php echo  $errorEmail; ?>" 

if(errorEmpty == true){
    $("#fname-validation,#lname-validation,#userName-validation,#password-validation,#retypepasswod-validation,#phone-validation,").addClass("inputError");
}

if(errorEmail == true){
    $("#email-validation").addClass("inputError");

}

if(errorEmpty == false && errorEmail == false){
    $("#fname-validation,#lname-validation,#email-validation,#userName-validation,#password-validation,#retypepasswod-validation,#phone-validation,").val("");

}


</script>




