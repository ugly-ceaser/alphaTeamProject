<?php 

include './inc/header.php';
include('./inc/config.php'); 


$id =  $_REQUEST['id']; 

$sendId = $_SESSION['id'];


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
       <div style="display: flex; flex-direction:column; inline-size:20%; justify-content:center; align-items:flex-start; " >

       <?php


       $req_check = "SELECT * FROM `Requests` WHERE `senderId` = '$sendId' AND `recieverId` = '$id'AND `status` = 0";
       $result = $conn->query($req_check);
       if ($result->num_rows > 0) {
           echo "Request Already Sent";
       }else{

        if(!empty($_SESSION['groupLEADER']) && $_SESSION['id'] !== $_REQUEST['id'] ){

        
            ?>
             <div  style="display: flex; flex-direction:row; inline-size:100%; justify-content:flex-start; align-items:center;">
             <button class="btn btn-primary" id="requestBt" onclick='sendAction(1,<?= $id ?>)' type="button">Send Request</button>
  
             </div>
             <?php
                   }

       }?>
                 <?php
                
             if(!empty($_SESSION['Admin'])){
                   ?>    

           <div  style="display: flex; flex-direction:row; inline-size:100%; justify-content:flex-start; align-items:center;">
           <button class="btn btn-primary" type="button">make Group Leader</button>
               
               </div>

               <?php }?>
       </div>
     
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

<script>

    function sendAction(constant,id){
        $.post(`./inc/scripts.php?action=sendReq&id=${id}`,function(res){
            if(res == "Request Sent Successfully"){
                $('#requestBt').hide();
                $('#requestBt').parent().html('Request sent succesfully');
            }
        })
    }
</script>




<?php  
  
 
  
include './inc/footer.php';
?>


  
  





 