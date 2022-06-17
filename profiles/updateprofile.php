<?php
include './inc/header.php';
include('./inc/config.php'); 
?>
 

 <form style="margin-top:10px;background-color:#023366 !important; padding:10px; color:#fff !important" class="profileForm" action="./inc/scripts.php" class="contact-form" method="post" enctype="multipart/form-data">

          
 
          <input id="id-validation"   type="text" name="id" hidden value="<?php echo $_SESSION["id"] ?>" >
          
          
          
          <div class="row">

          <div class="col-5">
                  <label class="control-label text-light"><h3 class="control-label text-light"> first Name</h3></label>
                    <input id="firstname-validation"   type="text" name="firstName"  class="contact-form-text" >
          
                </div>

                <div class="col-5">
                  <label class="control-label text-light"><h3 class="control-label text-light"> Last Name</h3></label>
                    <input id="firstname-validation"   type="text" name="lastName"  class="contact-form-text" >
          
                </div>
            
              <div class="col-10">
          
              <label class="control-label text-light"><h3 class="control-label text-light">Write Your Bio</h3></label>
              <textarea id="bio-validation"  name="bio" class="contact-form-text" placeholder="Write Your Bio"></textarea>
                
                
                
              </div>
              <div class="col-6">
                    <label class="control-label  text-light"><h3 class="control-label text-light">Profile picture</h3></label>
                      <input id="profile_pic-validation"   type="file" name="profile_pic"  class="contact-form-text" placeholder="Upload your Profile Picture">
              </div>
              <div class="col-4">
                  <label class="control-label text-light"><h3 class="control-label text-light"> Date of Birth</h3></label>
                    <input id="dob-validation"   type="date" name="dob"  class="contact-form-text" >
          
                </div>
              
              
              <div class="col-6">
                      <label class="control-label text-light"><h3 class="control-label text-light">Choose Your Role</h3></label>
                      <select name="role" class="contact-form-text" id="role-validation" >
                      <option> Select Role</option>
                      <option value="Backend Developer"> BackEnd Developer</option>
                      <option value="frontend Developer"> FrontEnd Developer</option>
                      <option value="fullstack Developer"> Fullstack Developer</option>
                      <option value="Project manager"> Project Manager</option>
                      <option value = "Ui/Ux Developer"> Ui/Ux Developer</option>
          
                      
                      <select>
                      
          
              </div>
          
              <div class="col-12 pt-1 pb-1">
          
                      <label class="control-label text-light"><h3 class="control-label text-light">Gender </h3> </label>
                      
                        <div  class="form-check form-switch">
                          <input id="gender-validation" class="form-check-input" name= "gender" value= "female" type="radio">
                          <label class="form-Radio-label text-light" >FEMALE</label>
                        </div>
                        <div class="form-check form-switch">
                        <input id="gender-validation" class="form-check-input" name= "gender" value= "true" type="radio">
                        <label class="form-check-label text-light" >MALE</label>
                      </div>
              
              </div>
          
              <div class="col-12 mt-3 mb-3">
                <input style="border-radius:0; background-color:white !important;
                color:#023366 ;" id="submit-validation" type="submit" name="submitProfile" class="contact-form-btn" value="Update">
              </div>
          
              <!-- <div class="col-6">
                <a href="./profile.php"> <input style="border-radius:0; text-align:center; background-color:white !important;
                color:red ;" type=""  class="contact-form-btn" value="Back To Dashboard"></a>
              </div> -->
          
          
              
            </div>
 
 </form>
 <?php  
  
 
  
include './inc/footer.php';
?>
 
 