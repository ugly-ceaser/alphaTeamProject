<?php

include './inc/header.php';
include('./inc/config.php'); 

?>





<?php 

$id = $_SESSION['id'];


if(!empty($_SESSION['groupLEADER'])){



$sql = "SELECT groupLeader_id  FROM GroupDetails where groupLeader_id = '$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    $row = mysqli_fetch_assoc($result);

   // echo $row['groupLeader_id'];
    $groupleaderId = $row['groupLeader_id'];
   // die();

    $groupleader = "SELECT * FROM `Profile` WHERE `id` = ' $groupleaderId'";
    $getLeaderDit = mysqli_query($conn,$groupleader);
    $row_leader = mysqli_fetch_assoc($getLeaderDit);

   // echo $row_leader['firstName'];

    $groupleader = $row_leader['firstName'];
   // die();
    
    
    
    ?>

<h1> ALPHA Group</h1>
<h3 style="color:inherit;">Group Cordinator: <?= $groupleader ?></h3>

<?php 

$MemberSearch = "SELECT * FROM `Profile` WHERE `id` = '$id'";

$SearchResult = mysqli_query($conn,$MemberSearch);

$row_member = mysqli_fetch_assoc($SearchResult);

$mygroup = $row_member['group'];








?>
<div class="group_Scroller snaps_inline">
    <?php 

        $groupSearch = "SELECT * FROM `Profile` WHERE `group` = '$mygroup'";
        $groupMembers = mysqli_query($conn, $groupSearch);

        $members = [];

        while($row = mysqli_fetch_assoc($groupMembers)){
            array_push($members, $row);
        }

        // var_dump($members);
        // die();

         if (count($members)) : ?>

        <?php foreach($members as $member) :
        ?>
    <div class="group_member">
        <img src="./users_img/<?= $member['profile_pic'] ?>" alt="member1">
        <br>
        <small>name : <?= $member['firstName'] ?></small>
        <br>
        <small>Role : <?= $member['role'] ?></small>
        <br>
        <small>bio :  <?= $member['about'] ?></small>
    </div>
   
  
    <?php endforeach; ?>

    <?php else : ?>
    <div class="group_member">
        
        <h1>No Members Yet</h1>
        <br>
      
       

    <?php endif; ?>


</div>

 

<?php
}
else {

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
}else {

    $id = $_SESSION['id'];

    $groupName = "SELECT * FROM `Profile` WHERE `id` = ' $id'";
    $getgroupName = mysqli_query($conn,$groupName);
    $row_groupName = mysqli_fetch_assoc($getgroupName);

   // echo $row_groupName['group'];
   // die();

    $Gname =$row_groupName['group'];
   // die();

   $QUERY = "SELECT * FROM `GroupDetails` WHERE `GroupName` = '$Gname'";
   $Fetch_leader = mysqli_query($conn, $QUERY);
   $GeT_Leader = mysqli_fetch_assoc($Fetch_leader);

   $leaderId = $GeT_Leader['groupLeader_id'];

   //echo $leaderId;
   //die();

   $query = "SELECT * FROM `Profile` WHERE `id` = '$leaderId'";
   $fetch_query = mysqli_query($conn, $query);
   $row_fetch = mysqli_fetch_assoc($fetch_query);

   $teamLeaderFname = $row_fetch['firstName'];
   $teamLeaderLname = $row_fetch['lastName'];

   $fullname = $teamLeaderFname . " " . $teamLeaderLname;

  // echo $fullname;
   //die();
    
    
    
    
    ?>
    
    <h1> ALPHA Group</h1>
<h3 style="color:inherit;">Group Cordinator: <?= $fullname ?></h3>

<?php 

$MemberSearch = "SELECT * FROM `Profile` WHERE `id` = '$id'";

$SearchResult = mysqli_query($conn,$MemberSearch);

$row_member = mysqli_fetch_assoc($SearchResult);

$mygroup = $row_member['group'];








?>
<div class="group_Scroller snaps_inline">
    <?php 

        $groupSearch = "SELECT * FROM `Profile` WHERE `group` = '$mygroup'";
        $groupMembers = mysqli_query($conn, $groupSearch);

        $members = [];

        while($row = mysqli_fetch_assoc($groupMembers)){
            array_push($members, $row);
        }

        // var_dump($members);
        // die();

         if (count($members)) : ?>

        <?php foreach($members as $member) :
        ?>
    <div class="group_member">
        <img src="./users_img/<?= $member['profile_pic'] ?>" alt="member1">
        <br>
        <small>name : <?= $member['firstName'] ?></small>
        <br>
        <small>Role : <?= $member['role'] ?></small>
        <br>
        <small>bio :  <?= $member['about'] ?></small>
    </div>
   
  
    <?php endforeach; ?>

    <?php else : ?>
    <div class="group_member">
        
        <h1>No Members Yet</h1>
        <br>
      
       

    <?php endif; ?>


</div>

 

<?php

}


?>



















    <!--   Core JS Files   -->
    <?php
include './inc/footer.php';
?>