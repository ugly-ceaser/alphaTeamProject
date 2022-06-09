<?php

include './inc/header.php';
include('./inc/config.php'); 

?>





<?php 

$id = $_SESSION['id'];

$sql = "SELECT groupLeader_id  FROM GroupDetails where groupLeader_id = '$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  ?>

<h1> ALPH Group</h1>
<small style="color:inherit;">Group Cordinator: Martins Onyia</small>


<div class="group_Scroller snaps_inline">
    <div class="group_member">
        <img src="" alt="member1">
        <br>
        <small>name : Martins</small>
        <br>
        <small>Role : Frontend Developer</small>
        <br>
        <small>bio : Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis hic neque magni similique blanditiis fugit. Voluptatem autem asperiores eos facilis exercitationem temporibus voluptate, quisquam similique earum, quas quibusdam, maxime ducimus.</small>
    </div>
    <div class="group_member">
        <img src="" alt="member1">
        <br>
        <small>name : Martins</small>
        <br>
        <small>Role : Frontend Developer</small>
        <br>
        <small>bio : Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis hic neque magni similique blanditiis fugit. Voluptatem autem asperiores eos facilis exercitationem temporibus voluptate, quisquam similique earum, quas quibusdam, maxime ducimus.</small>
    </div>
    <div class="group_member">
        <img src="" alt="member1">
        <br>
        <small>name : Martins</small>
        <br>
        <small>Role : Frontend Developer</small>
        <br>
        <small>bio : Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis hic neque magni similique blanditiis fugit. Voluptatem autem asperiores eos facilis exercitationem temporibus voluptate, quisquam similique earum, quas quibusdam, maxime ducimus.</small>
    </div>
    <div class="group_member">
        <img src="" alt="member1">
        <br>
        <small>name : Martins</small>
        <br>
        <small>Role : Frontend Developer</small>
        <br>
        <small>bio : Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis hic neque magni similique blanditiis fugit. Voluptatem autem asperiores eos facilis exercitationem temporibus voluptate, quisquam similique earum, quas quibusdam, maxime ducimus.</small>
    </div>
    <div class="group_member">
        <img src="" alt="member1">
        <br>
        <small>name : Martins</small>
        <br>
        <small>Role : Frontend Developer</small>
        <br>
        <small>bio : Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis hic neque magni similique blanditiis fugit. Voluptatem autem asperiores eos facilis exercitationem temporibus voluptate, quisquam similique earum, quas quibusdam, maxime ducimus.</small>
    </div>
    <div class="group_member">
        <img src="" alt="member1">
        <br>
        <small>name : Martins</small>
        <br>
        <small>Role : Frontend Developer</small>
        <br>
        <small>bio : Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis hic neque magni similique blanditiis fugit. Voluptatem autem asperiores eos facilis exercitationem temporibus voluptate, quisquam similique earum, quas quibusdam, maxime ducimus.</small>
    </div>


</div>

 

<?php
}
else{

    ?>

<form style="margin-top:10px;background-color:#023366 !important; padding:10px; color:#fff !important" class="profileForm" action="./inc/scripts.php" class="contact-form" method="post" enctype="multipart/form-data">
 
 <input id="id-validation"   type="text" name="id" hidden value="<?php echo $_SESSION["id"] ?>" >
 
 
 
 <div class="row">

 <div class="col-5">
         <label class="control-label text-light"><h3 class="control-label text-light"> Group Name</h3></label>
           <input id="firstname-validation"   type="text" name="groupName"  class="contact-form-text" >
 
       </div>

     
     <div class="col-6">
           <label class="control-label  text-light"><h3 class="control-label text-light">Profile picture</h3></label>
             <input id="profile_pic-validation"   type="file" name="group_pic"  class="contact-form-text" placeholder="Upload your Profile Picture">
     </div>
    
     
     
     
 
     <div class="col-12 mt-3 mb-3">
       <input style="border-radius:0; background-color:white !important;
       color:#023366 ;" id="submit-validation" type="submit" name="createGroup" class="contact-form-btn" value="Create Group">
     </div>
 
     <!-- <div class="col-6">
       <a href="./profile.php"> <input style="border-radius:0; text-align:center; background-color:white !important;
       color:red ;" type=""  class="contact-form-btn" value="Back To Dashboard"></a>
     </div> -->
 
 
     
   </div>

</form>



<?php
}


?>



















    <!--   Core JS Files   -->
    <?php
include './inc/footer.php';
?>