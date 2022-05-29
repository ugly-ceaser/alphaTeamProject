<?php
session_start();
include ("../../publicFiles/conn.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/lib/bootstrap/bootstrap.css">
    <link rel="apple-touch-icon" href="../img/logo192.png" type="image/png">
    <link rel="icon" href="../img/logo192.png" type="image/png">
    <link rel="stylesheet" href="../css/main.scss">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>The ALPHA PROJECT</title>

   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg" style="background-color:var(--blue) !important; color: var(--white) !important;">
        <div class="container-fluid" style="background-color:var(--blue); color: var(--white) !important">
          <a  style="color: var(--white) !important" class="navbar-brand" href="/">ALPHA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor03" style="background-color:var(--blue); color: var(--white) !important">
            <ul class="navbar-nav me-auto" style="background-color:var(--blue); color: var(--white) !important">
              <li class="nav-item" style="background-color:var(--blue); color: var(--white) !important">
                <a class="nav-link active" href="../index.php" style="color: var(--white) !important">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a style="color: var(--white) !important" class="nav-link" href="./competetion.php">Competion</a>
              </li>
              <li class="nav-item">
                <a style="color: var(--white) !important" class="nav-link" href="../index.php#about">About Us</a>
              </li>
              <li class="nav-item">
                <a  style="color: var(--white) !important"class="nav-link" href="./contact.php">Contact</a>
              </li>
             
            </ul>
            <form class="d-flex">
              <?php 
              if(!isset($_SESSION['id'])){ 
                
                include ('./notLogged.php');
              }else{
                include ('./logged.php');
              }


              ?>

               
            </form>
          </div>
        </div>
      </nav>

