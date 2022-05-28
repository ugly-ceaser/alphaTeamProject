<?php


if(isset($_POST['submit'])){

$firstName = $_POST['Firstname'];

$Email = $_POST['Email'];

$userPhoneNumber = $_POST['PhoneNumber'];

$contactMessage = $_POST['ContactMessage'];




$errorEmpty = false;


$errorEmail = false;


if(empty($firstName)  || empty($Email)  || empty($userPhoneNumber) ||empty($contactMessage ))
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


$("#fname-validation,#email-validation,#phone-validation,#message-validation").removeClass("inputError"); 

let errorEmpty = "<?php echo  $errorEmpty; ?>"

let errorEmail = "<?php echo  $errorEmail; ?>" 

if(errorEmpty == true){
$("#fname-validation,#email-validation,#phone-validation,#message-validation").addClass("inputError");
}

if(errorEmail == true){
$("#email-validation").addClass("inputError");

}

if(errorEmpty == false && errorEmail == false){
$("#fname-validation,#email-validation,#phone-validation,#message-validation").val("");

}


</script>




