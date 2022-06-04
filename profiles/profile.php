






<?php 

if ($status == 1){



include './inc/header.php';
?>
    <!-- End Navbar -->
    <div class="main" >
      <div class="profilepic"><div class="image"><img src="" alt=""><button style="width:57px; height:57px;border-radius:50px;background:#002365; transform: translate(230%,230%); border: none;"><i class=" i ni ni-fat-add text-white"></i></button></div></div>
      <div class="input">
        <div class="attr">
          <p>Name</p>
          <h5 style="margin-top: -1.5%;">Itadori Sukuna</h5>
        </div>

        <div class="attr">
          <p>Team Name</p>
          <div style="display: flex; gap: 1%;">
            <h5 style="margin-top: -1.5%;">Alpha Team</h5>
            <a href="" style="margin-top: -1%;"><i class="ni ni-tv-2 text-success text-sm opacity-10"></i></a>
          </div>
        </div>

        <div class="attr">
          <p>About</p>
          <h6 class="about" style="margin-top: -1.5%;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores quibusdam praesentium sequi iusto culpa odit consectetur ab vero, voluptatem cum sint tempora doloribus nam numquam delectus! Nesciunt reprehenderit totam soluta.</h6>
        </div>
      </div>
    </div>
  
</main> 
<?php  
  
 
  
include './inc/footer.php';

}else{ 
  
  
  include '../pages/inc/header.php';
  ?>

<form style="margin-top:10px;background-color:#023366 !important; padding:10px; color:#fff !important" class="profileForm" action="./inc/scripts.php?id=<?php echo $_SESSION['id'] ?>" class="contact-form" method="post">

<input id="id-validation"   type="text" name="id" hidden value="<?php echo $_SESSION["id"] ?>" >



<div class="row">
  
    <div class="col-10">

    <label class="control-label text-light"><h3>Write Your Bio</h3></label>
    <textarea id="bio-validation"  name="bio" class="contact-form-text" placeholder="Write Your Bio"></textarea>
     
      
      
    </div>
    <div class="col-4">
          <label class="control-label  text-light"><h3>Profile picture</h3></label>
            <input id="profile_pic-validation"   type="file" name="profile_pic"  class="contact-form-text" placeholder="Upload your Profile Picture">
    </div>
    <div class="col-4">
        <label class="control-label text-light"><h3> Date of Birth</h3></label>
          <input id="dob-validation"   type="date" name="dob"  class="contact-form-text" >

     </div>
   
   
    <div class="col-4">
            <label class="control-label text-light"><h3>Choose Your Role</h3></label>
            <select name="role" class="contact-form-text" id="role-validation" >
            <option> Select Role</option>
            <option value="Backend Developer"> BackEnd Developer</option>
            <option value="frontend Developer"> FrontEnd Developer</option>
            <option value="fullstack Developer"> Fullstack Developer</option>
            <option value="Project manager"> Project Manager</option>
            <option value = "Ui/Ux Developer"> Ui/Ux Developer</option>

            
            <select>
            

    </div>

    <div class="col-6 pt-6">

            <label class="control-label text-light"><h3>Gender </h3> </label>
            
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



 