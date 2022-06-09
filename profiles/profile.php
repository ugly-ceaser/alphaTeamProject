






<?php 

include './inc/header.php';
include('./inc/config.php'); 


$id =  $_SESSION['id']; 












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
    <!-- End Navbar -->
    <div class="main" >
      <div class="profilepic"><div class="image"><img style="
      inline-size:100%;
      aspect-ratio: 16/14;
      object-fit: cover;"
       src="./users_img/<?= $profile_pic ?>" alt=""></div></div>
      <div class="input">
        <div class="attr">
          <p>Name</p>
          <h5 style="margin-top: -1.5%;"><?php  echo $name?></h5>
        </div>

        <div class="attr">
          <p>Email</p>
          <h5 style="margin-top: -1.5%;"><?php  echo $email?></h5>
        </div>

        <div class="attr">
          <p>Role</p>
          <h5 style="margin-top: -1.5%;"><?php  echo $role?></h5>
        </div>


        <div class="attr">
          <p>Team Name</p>
          <div style="display: flex; gap: 1%;">
            <h5 style="margin-top: -1.5%;"><?php echo $group?> Team </h5>
            <a href="" style="margin-top: -1%;"><i class="ni ni-tv-2 text-success text-sm opacity-10"></i></a>
          </div>
        </div>

        <div class="attr">
          <p>About</p>
          <h6 class="about" style="margin-top: -1.5%;"> <?php echo $bio ?></h6>
        </div>

        <div class="attr">
          <p>Date Of Birth</p>
          <h6 class="about" style="margin-top: -1.5%;"> <?php echo $dob ?></h6>
        </div>
      </div>
    </div>
  
</main> 
<?php  
  
 
  
include './inc/footer.php';
?>


  
  





 