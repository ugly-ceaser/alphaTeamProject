<?php 

include './inc/header.php';
include('./inc/config.php'); 
?>

<?php
 if(empty($submitted)){ ?>

<form>

   <div class="flex" style="display: flex;  flex-direction:row; margin-top: 2%;">
      <div><h5>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></div>
      <div style="flex-basis:80%;"><input type="text" name="taskName" placeholder="Enter Task Name"></div>
    </div> 

    <div class="flex" style="display: flex;  flex-direction:row; margin-top: 2%;">
      <div><h5>Task Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></div>
      <div style="flex-basis:80%;"><input type="text" name="taskId" placeholder="Enter Task Id"></div>
    </div> 

    <input type="text" value="groupId" name="groupid" hidden>

    <div class="flex" style="display: flex; flex-direction:row;  margin-top: 2%;">
      <div><h5>Description:&nbsp;</h5></div>
      <div style="flex-basis:80%;"><textarea placeholder="Describe your task" name="taskDescription"style="border-style:2px solid #002365 !important;"></textarea></div>
    </div>



    

    <div class="flex" style="display: flex;  flex-direction:row; margin-top: 2%;">
      <div><h5>PDF File:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></div>
      <div style="flex-basis:80%;"><input type="file" name="taskDetails"></div>
    </div> 


    <div class="flex" style="display: flex;  margin-top: 2%;">
     
      
        <div>
          <p style="margin-bottom: 1%;">End Date : Today</p>
          
        </div>
      </div>
      <button class="btn"style="display: block; margin: auto auto; background: #002365; margin-top:2%;color: white; border: none; border-style: 2px solid #724cb7; padding: 1%; border-radius: 4px; width: 30%; transition: 300ms ease; margin-bottom:3%;" name="submit">Upload &nbsp;<span><i class="ni ni-send"></i></span></button>
      </div>
      </div>
    </div>
</form>

<?php }else{ 

?>
 <button class="btn"style="display: block; margin: auto auto; background: #002365; margin-top:2%;color: white; border: none; border-style: 2px solid #724cb7; padding: 1%; border-radius: 4px; width: 30%; transition: 300ms ease; margin-bottom:3%;" name="submit">View Score &nbsp;<span><i class="ni ni-send"></i></span></button>

<?php } ?>



  </main>

    <!--   Core JS Files   -->
    <?php
include './inc/footer.php';
?>