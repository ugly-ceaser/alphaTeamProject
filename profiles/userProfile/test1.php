<?php include('inc/header.php'); ?>
<?php include('inc/config.php'); 



$id =  $_REQUEST['id']; 

$sql_Users = "SELECT * FROM Users where id = '$id'";
$result_Users = mysqli_query($conn, $sql_Users);  

$row_Users = mysqli_fetch_assoc($result_Users); 

$name =  $row_Users['Firstname'];
$email =  $row_Users['Email'];
$status = $row_Users['Status'];


$sql_profile = "SELECT * FROM profile where id = '$id'";
$result_profile = mysqli_query($conn, $sql_profile);  

    $row_profile = mysqli_fetch_assoc($result_profile); 
  $about =  $row_profile['about'];
  $gender =   $row_profile['gender'];
  $dob =   $row_profile['dob'];
  $role =   $row_profile['role'];
  $profile_pic =   $row_profile['profile_pic']; 

?>
<?php 

if ($status == 1){

  ?>

          <div class='row'>
          <div class='col-4'>
          <div class='row mt-5'>
          <div class='col-12 text-center pb-3'>
          <img src='images/<?php echo $profile_pic; ?>' alt='' height=200 width=200>
          </div>
          
          <div class='col-6'>
          Name:
          </div>
          <div class='col-6'>
          <?php echo $name; ?>
          </div>

          <div class='col-6'>
          Email:
          </div>
          <div class='col-6'>
          <?php echo $email; ?>
          </div>
          <div class='col-6'>
          about:
          </div>
          <div class='col-6'>
          <?php echo $about; ?>
          </div>
          <div class='col-6'>
          gender:
          </div>
          <div class='col-6'>
          <?php echo $gender; ?>

          </div>
          <div class='col-6'>
          Dob:
          </div>
          <div class='col-6'>
          <?php echo $dob; ?>

          </div>
          <div class='col-6'>
          Role:
          </div>
          <div class='col-6'>
          <?php echo $role; ?>

          </div>
          <div class='col-12 pt-2'>
        
<?php }


else{ ?>

 
  <form style="margin-top:10px;background-color:#023366 !important; padding:10px; color:#fff !important" class="profileForm" action="./inc/scripts.php?id=<?php echo $_SESSION['id'] ?>" class="contact-form" method="post">

  <input id="id-validation"   type="text" name="id" hidden value="<?php echo $_SESSION["id"] ?>" >



  <div class="row">
      <div class="col-6">
            <label class="control-label  text-light">Choose Your Profile picture</label>
              <input id="profile_pic-validation"   type="file" name="profile_pic"  class="contact-form-text" placeholder="Upload your Profile Picture">
      </div>
      <div class="col-6">

      <label class="control-label text-light">Write Your Profile picture</label>
      <textarea id="bio-validation"  name="bio" class="contact-form-text" placeholder="Write Your Bio"></textarea>
       
        
        
      </div>
      <div class="col-12">
          <label class="control-label text-light">Choose Your Date of Birth</label>
            <input id="dob-validation"   type="date" name="dob"  class="contact-form-text" >

       </div>
     
     
      <div class="col-6">
              <label class="control-label text-light">Choose Your Role</label>
              <select name="role" class="contact-form-text" id="role-validation" >
              <option> Select Role</option>
              <option value="Backend Developer"> BackEnd Developer</option>
              <option value="frontend Developer"> FrontEnd Developer</option>
              <option value="fullstack Developer"> Fullstack Developer</option>
              <option value="Project manager"> Project Manager</option>
              <option value = "Ui/Ux Developer"> Ui/Ux Developer</option>

              
              <select>
              

      </div>

      <div class="col-6 pt-4">

              <label class="control-label text-light mt-2">Gender : </label>
              
                <div  class="form-check form-switch">
                  <input id="gender-validation" class="form-check-input" name= "gender" value= "female" type="radio">
                  <label class="form-Radio-label text-light" >FEMALE</label>
                </div>
                <div class="form-check form-switch">
                <input id="gender-validation" class="form-check-input" name= "gender" value= "true" type="radio">
                <label class="form-check-label text-light" >MALE</label>
              </div>
     
      </div>

      <div class="col-12">
        <input style="border-radius:0; background-color:white !important;
        color:#023366 ;" id="submit-validation" type="submit" name="submitProfile" class="contact-form-btn" value="Upload">
      </div>


     
    </div>

</form>
<?php }
?>


<?php
   $sendFrom= $_SESSION["member_id"]; 
$sql_CheckReq = "SELECT * FROM requests where sendingfrom = '$sendFrom' and sendingto = '$id' and accepted='0'";

$result_CheckReq = mysqli_query($conn, $sql_CheckReq);   
if (mysqli_num_rows($result_CheckReq) > 0) {
  echo "Request Already Sent";
}else{
  if(  $sendFrom == $id){

  }else{

  ?>

<button class='btn btn-primary' id='sendReq' onclick='sendAction(1,"<?php echo $id ?>")'>Send Friend Request</button>

<?php
}
} 
?>



</div>
</div>

</div>
<div class="col-8">

</div>
</div>
 
<script>
function sendAction(constant,id){
   $.post(`handler/action.php?action=sendReq&id=${id}`,function(res){
      
       if(res=='Request send, saved into DB'){
$('#sendReq').hide()
$('#sendReq').parent().html('Request Send Successfully')
       }
   })
}
</script>
 

<?php include('inc/footer.php') ?>