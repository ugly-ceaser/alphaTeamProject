<?php include('inc/header.php'); ?>
<?php include('inc/config.php'); 



$id =  $_REQUEST['id']; 

$sql_Users = "SELECT * FROM Users where id = '$id'";
$result_Users = mysqli_query($conn, $sql_Users);  

$row_Users = mysqli_fetch_assoc($result_Users); 

$name =  $row_Users['Firstname'];
$email =  $row_Users['Email'];


$sql_profile = "SELECT * FROM profile where id = '$id'";
$result_profile = mysqli_query($conn, $sql_profile);  

    $row_profile = mysqli_fetch_assoc($result_profile); 
  $about =  $row_profile['about'];
  $gender =   $row_profile['gender'];
  $dob =   $row_profile['dob'];
  $role =   $row_profile['role'];
  $profile_pic =   $row_profile['profile_pic']; 

?>