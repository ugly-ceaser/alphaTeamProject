<?php
include './inc/header.php';
?>

<div class="flex" style="display: flex; margin-left: 3.5%; margin-top: 2%;">
      <table style="margin-bottom: 3%;">
        <tr>
          <th> <h4>Name</h4> </th>
          <th> <h4>Role</h4> </th>
          <th> <h4>Phone Number</h4> </th>
          <th colspan="3"><h4>Actions</h4></th>
        </tr>
    


        <tr class="tr">
       
          <td class="name"><h6 class="name">Alpha</h6>
           <td class="name"><h6 class="name">Frontend Developer</h6></td>
           <td class="name"><h6 class="name">08033385032 <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i></h6></td>
           
           <?php 
           if(!empty($_SESSION['groupLEADER'])){ ?>
           <td>
               <a href="" class="a bg-success text-white" ><span>Send Request </span></a>
               
        
        </td>
        <?php } ?>
        <td>
               <a href="" class=" bg-primary text-white" ><span>View Profile</span></a>
               
        
        </td>
           
        </tr>


       
       
        
   </table>
    </div>

  </main>












  <!--   Core JS Files   -->
  <?php
include './inc/footer.php';
?>