<?php 

include './inc/header.php';
include('./inc/config.php'); 
?>


<div style="margin-left: 2.99%; width: 92%; margin-top: 2%;">
    <div class="flex">
        

      <a href="group.php?groupId=22123213">
      <h4>Student Forum</h4>
          <h5>Veiw Task</h5>
        </a>


        <?php 
        if(!empty($_SESSION['Admin'])){
            ?>
     
      
      <a href="" class="a"><h6>Create Task</h6><i class=" i ni ni-fat-add text-white"></i></a>
        <?php }?>
    </div>
  </div>
  </main>

    <!--   Core JS Files   -->
    <?php
include './inc/footer.php';
?>