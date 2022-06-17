<?php
include './inc/header.php';
include('./inc/config.php'); 





$sql_Users = "SELECT * FROM Users where id = '$id'";
$result_Users = mysqli_query($conn, $sql_Users);  

$row_Users = mysqli_fetch_assoc($result_Users); 


$email =  $row_Users['Email'];
$status = $row_Users['Status'];


$sql_profile = "SELECT * FROM profile where id = '$id'";
$result_profile = mysqli_query($conn, $sql_profile);  

   
$row_profile = mysqli_fetch_assoc($result_profile); 

$name = $row_profile['firstName'] ." " . $row_profile['lastName']  ;
  $about =  $row_profile['about'];
  $gender =   $row_profile['gender'];
  $dob =   $row_profile['dob'];
  $role =   $row_profile['role'];
  $profile_pic =   $row_profile['profile_pic']; 
  $group = $row_profile['group'];
  $bio = $row_profile['about'];
?>


<div style="margin-left: 2.99%; width: 92%; margin-top: 2%;">
sdfwrdf4es
    
  </div>
  </main>

    <!--   Core JS Files   -->
    <?php
include './inc/footer.php';
?>