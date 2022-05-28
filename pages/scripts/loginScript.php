<?php
if(isset($_POST['submit'])){



$Email = $_POST['Email'];
$userPassword = $_POST['Password'];




$errorEmpty = false;


$errorEmail = false;


if(empty($Email) || empty($userName) || empty($userPassword))
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


$("#email-validation,#password-validation").removeClass("inputError"); 

let errorEmpty = "<?php echo  $errorEmpty; ?>"

let errorEmail = "<?php echo  $errorEmail; ?>" 

if(errorEmpty == true){
$("#email-validation,#password-validation").addClass("inputError");
}

if(errorEmail == true){
$("#email-validation").addClass("inputError");

}

if(errorEmpty == false && errorEmail == false){
$("#email-validation,#password-validation").val("");

}


</script>




