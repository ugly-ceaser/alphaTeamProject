




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <title>
    Alpha
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<?php


include './inc/header.php';
include('./inc/config.php'); 

?>

<form>

   <div class="flex" style="display: flex;  flex-direction:row; margin-top: 2%;">
      <div><h5>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></div>
      <div style="flex-basis:80%;"><input type="text" name="taskName" placeholder="Enter Task Name"></div>
    </div> 

    <div class="flex" style="display: flex; flex-direction:row;  margin-top: 2%;">
      <div><h5>Description:&nbsp;</h5></div>
      <div style="flex-basis:80%;"><textarea placeholder="Describe your task" name="taskDescription"style="border-style:2px solid #002365 !important;"></textarea></div>
    </div>



    

    <div class="flex" style="display: flex;  flex-direction:row; margin-top: 2%;">
      <div><h5>PDF File:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></div>
      <div style="flex-basis:80%;"><input type="file" name="taskDetails"></div>
    </div> 


    <div class="flex" style="display: flex;  margin-top: 2%;">
     
      <div class="duration" style="margin-left: -20%;">
        <h4 style="text-align: center; margin-top: 3%;">Duration</h4>
        <div class="duration-flex" style="display: flex; justify-content: center; align-items: center; gap: 10%;">
          <div>
          <p style="margin-bottom: 1%;">Start Date</p>
          <input type="date" name="Startdate">
        </div>
        <div>
          <p style="margin-bottom: 1%;">End Date</p>
          <input type="date" name="Enddate">
        </div>
      </div>
      <button class="btn"style="display: block; margin: auto auto; background: #002365; margin-top:2%;color: white; border: none; border-style: 2px solid #724cb7; padding: 1%; border-radius: 4px; width: 30%; transition: 300ms ease; margin-bottom:3%;" name="submit">Upload &nbsp;<span><i class="ni ni-send"></i></span></button>
      </div>
      </div>
    </div>
</form>

  </main>

    <!--   Core JS Files   -->
    <?php  
  
 
  
  
  
 
  
  include './inc/footer.php';
  ?>
  