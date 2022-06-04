<?php
include './inc/header.php';
?>


<div style="margin-left: 2.99%; width: 92%; margin-top: 2%;">
    <div class="flex">
      <a href="group.php?groupId=22123213">
          <h4>Alpha</h4>

          <h5>View Team</h5>
        </a>


      <?php 
        if(!empty($_SESSION['Admin'])){
            ?>
     
      
      <a href="" class="a"><h6>Add Team</h6><i class=" i ni ni-fat-add text-white"></i></a>
      <?php }?>
    </div>
  </div>
  </main>

    <!--   Core JS Files   -->
    <?php
include './inc/footer.php';
?>