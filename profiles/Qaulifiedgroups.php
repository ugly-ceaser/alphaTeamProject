<?php 

 

include ('./inc/header.php');
include('./inc/config.php'); 


$qaulifiedQuery = "SELECT * FROM `GroupDetails` WHERE `qaulification` = '1'";
$performQuery = mysqli_query($conn, $qaulifiedQuery);
 $qaulifiedGroups = [];

 while($row = mysqli_fetch_assoc($performQuery)){
  array_push($qaulifiedGroups,$row);
 }

// print_r($qaulifiedGroups);

// echo $qaulifiedGroups[0]['id'];

// die();




function Name($name,$conn){

  $getname = "SELECT * FROM `Profile` WHERE `id` = '$name'";

  $performQuery = mysqli_query($conn,$getname);

  $row = mysqli_fetch_assoc($performQuery);

  $firstName = $row['firstName'];
  $lastName = $row['lastName'];

  $fullname = $firstName ." " . $lastName;


  return $fullname;


 


};



?>











<?php if (count($qaulifiedGroups)) : ?>
    
        <div>
            

            <div class="group_Scroller snaps_inline">
            <?php foreach ($qaulifiedGroups as $teams) : ?>
                    <div class="group_member">

                    <h6 style="color:inherit;">Group Name: <?= $teams['groupName']; ?> </h6>
                        
                        <img src="./users_img/<?= $teams['groupProfile'] ?>" alt="member1">
                        <br>
                        
                        <br>
                        <?php $teamleader = $teams['groupLeader_id']; ?>
                        <small>Group Leader : <?= Name($teamleader,$conn)  ?></small>

                        <button style="margin:15px;">Disqaulify Group</button>
                      
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    
<?php else : ?>
    <h1>no Qaulified Groups</h1>
<?php endif; ?>
    <!--   Core JS Files   -->
    <?php
include './inc/footer.php';
?>