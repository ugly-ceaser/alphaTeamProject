<?php
session_start();
include './inc/config.php';




// if( !isset($_SESSION['status']) ){

//   header("Location: ./updateprofile.php");
// }


?>

<?php 

if($_REQUEST){
 $page = $_REQUEST['page'];
}

 

 $id =  $_SESSION['id']; 
 ?>






<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#023366">
    <link rel="apple-touch-icon" href="../img/logo192.png" type="image/png">
    <link rel="icon" href="../img/logo192.png" type="image/png">

    <link rel="manifest" href="../manifest.json">

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
  <style>

a{
    border-radius:0px !important;
}






.notify{
  padding: 6%;
  background-color: #002365;
  border-radius: 8px;
}
.who{
  color: #fff;
  font-size: 100%;
  font-weight: bold;
}
.message{
  color: #fff;
  font-size: 70%;
}
.greeting{
  color: #724cb7;
  font-size: 220%;
  transform: translate(0%, 0%);
}
.profilepic{
  width: 100%;
  height: fit-content;
  display: flex;
  justify-content: center;
  align-items: center;
}
.image{
  width: 190px;
  height: 190px;
  border-radius: 1000px;
  /* background-color: rgb(210, 210, 210); */
  margin-left: -13%;
}

.image >img{
  inline-size:200px;
  aspect-ratio:16 9;
  

}


textarea, input{
  border: none;
  border: 1.7px solid #002365;
  border-radius: 3px;
}
textarea{
  width: 95%;
  height: 170px;
}



.input{
  margin-top: 3%;
  width: 100%;
}

.attr{
  margin-bottom: 1%;
}
.main{
  margin-left: 2.99%; 
  width: 92%;
}
.i{
transform: scale(2);
margin-top: 20%;
}
@media (max-width:800px) {
  .main{
    margin-left: 5%; 
    width: 90%;
  }
  .h2{
    margin-bottom: 5% !important;
    margin-left: -25%;
  }
  .search{
    margin-left: -25px;
  }
  .input{
    margin-top: 12%;
  }
  .about{
    text-align: justify;
  }
  .attr{
    margin-bottom: 3%;
  }
  .attr p{
    margin-bottom: 2%;
  }
  .attr div{
    gap: 3% !important;
  }
  .attr div a{
    margin-top: -.7px !important;
  }
  .profilepic{
    margin-top: 5%;
  }
  .image{
    margin-left: -2%;
  }
  .input-group{
    margin-top: 12%;
  }
}

.flex{
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 2%;
  flex-wrap: wrap;
}
.flex a{
  flex-basis: 23%;
  text-align: center;
  height: 200px;
  background-color: rgb(0, 35, 101, 0.6);
  margin-bottom: 2%;
  padding: 6%;
  border-radius: 5px;
  font-size: 120%;
  transition: 200ms ease; 
}

.flex a:hover{
  transform: scale(1.07);
}

.flex a h4{
  color: white;
  letter-spacing: 2px !important;
  margin-top: 5%;
}
.flex a h6{
  margin-top: 6%;
  color: white;
  font-size: 88%;
}

.flex .a{
  background-color: rgb(0, 35, 101, 0.4);
}
.i{
transform: scale(1.8);
}

@import "https://unpkg.com/open-props";
@import "https://unpkg.com/open-props/normalize.min.css";

.group_Scroller{
    display:grid;
    gap:1rem;
    grid-auto-flow: column;
    grid-auto-columns: 21%;
    overflow-x: auto;
    overscroll-behavior-inline: contain;
}

.group_member{
    display:grid;
    grid-template-rows: min-content;
    gap:0.5rem;
    padding:1rem;
    background-color:#002365;
    color:#fff;
    /* padding: 0 1rem 1rem; */
}

.group_member > img{
    inline-size:100%;
    aspect-ratio: 16/9;
    object-fit: cover;
}
.snaps_inline{
    scroll-snap-type: inline mandatory;
    scroll-padding-inline: 0.5rem ;
}

.snaps_inline > *{
    scroll-snap-align: start;
}


.flex > table{
    width: 97%;
    border: 1px solid #002365;
    border-radius: 10px !important;
    padding: 2% !important;
  }
  th{
    padding: 1%;
    margin-top: 3%;
  }
 td > h5, .name{
    padding-left: 2%;
    padding-top: 1%;
    padding-bottom: 1%;
  }
  .tr:nth-child(even){
    background-color: rgb(0,35,101,0.45);

  }

  .tr:nth-child(even) > td .name{
         color: white;
  }
  table a{
    background-color: white;
    padding: 1%;
    border-radius: 3px;
    color: #002365;
  }

  .tr:nth-child(odd) > td a{
    background-color: rgb(0,35,101,0.4);
    color: white;
  }
  @media (max-width:800px) {
    .input-group{
      margin-top: 12%;
    }
    table{
      margin-top: 5%;
    }
table h5, table a{
font-size: 90%;
}
    table tr td div{
      flex-basis: 100%;
    }
    table tr td .a{
      margin-left: 0% !important;
      margin-top: -10% !important;
    }
    }





  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="bg-primary position-absolute w-100"></div>
  <aside  style="border-radius:0px; height:90vh !important; background-color: #002365 !important;" class="h-75 sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-0 " id="sidenav-main">
    <div class="sidenav-header" style="border-radius:0px !important;">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.php " target="_blank">
        <span class="ms-1 font-weight-bold"><h5 style="color: white; margin-top: -11%; margin-left: 4%;">User Dashboard</h5></span>
      </a>
    </div>
    <hr class="horizontal mt-0" style="background-color: white;">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
      

        <li class="nav-item">
          <a class="nav-link" href="./index.php?page=Timeline">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1" style="color: white;">Timeline</span>
          </a>
        </li>
        <?php
          if(empty($_SESSION['Admin'])){
            ?>
        <li class="nav-item">
          <a class="nav-link" href="./profile.php?page=Profile">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-light text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1" style="color: white;">Profile</span>
          </a>
        </li>
        <?php }?>
        <li class="nav-item">
          <a class="nav-link" href="./members.php?page=Members">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-light text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1" style="color: white;">Member(s)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./task.php?page=Tasks">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1" style="color: white;">Tasks</span>
          </a>
        </li>
        <?php 

            if( !empty($_SESSION['Admin'])){
                ?>
                <li class="nav-item">
            <a class="nav-link " href="./groups.php?page=Groups">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1" style="color: white;">Create Task</span>
            </a>
            </li>
            <?php
            }
        
        if(!empty($_SESSION['groupLEADER'])){
            ?>
             <li class="nav-item">
          <a class="nav-link " href="./groups.php?page=Groups">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1" style="color: white;">GROUP</span>
          </a>
        </li>
        <?php
        }

        if(!empty($_SESSION['Admin'])){
          ?>
           <li class="nav-item">
        <a class="nav-link " href="./adminGroup.php?page=Groups">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1" style="color: white;">GROUP</span>
        </a>
      </li>
      <?php
      }

        if(!empty($_SESSION['groupLEADER']) && !empty($_SESSION['group']) && !empty($_SESSION['Admin']) ){
          ?>
           <li class="nav-item">
        <a class="nav-link " href="./groups.php?page=Groups">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1" style="color: white;">Veiw  Group</span>
        </a>
      </li>
      <?php
      }

        if( !empty($_SESSION['Admin'])){
            ?>
             <li class="nav-item">
          <a class="nav-link " href="./groups.php?page=Groups">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1" style="color: white;">Qaulified Groups</span>
          </a>
        </li>
        <?php
        }

        if(!empty($_SESSION['groupLEADER']) && !empty($_SESSION['group']) ){
          ?>
           <li class="nav-item">
        <a class="nav-link " href="./group.php?page=My Group">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1" style="color: white;">Veiw Your Group</span>
        </a>
      </li>
      <?php
      }




       


        if(empty($_SESSION['groupLEADER']) && !empty($_SESSION['group']) ){
            ?>
             <li class="nav-item">
          <a class="nav-link " href="./group.php?page=My Group">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1" style="color: white;">Veiw Your Group</span>
          </a>
        </li>
        <?php
        }

        


     

        if(!empty($_SESSION['groupLEADER']) && empty($_SESSION['hasNOtGroup'])  ){
            ?>
             <li class="nav-item">
          <a class="nav-link " href="./group.php?page=My Group">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1" style="color: white;">Create Your Group</span>
          </a>
        </li>
        <?php
        }

        if(empty($_SESSION['groupLEADER']) && empty($_SESSION['group']) && empty($_SESSION['Admin'])){
            ?>
             <li class="nav-item">
          <a class="nav-link " href="./application.php?page=Application">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1" style="color: white;">Apply to be Leader</span>
          </a>
        </li>
        <?php
        }



        
         
          
         
         
        if(empty($_SESSION["Admin"])){
          ?>
        
        <li class="nav-item">
        <a class="nav-link " href="./updateprofile.php">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1" style="color: white;">Update Profile</span>
        </a>
      </li>
      <?php } ?>
          
       
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav style="background-color:#002365 !important; border-radius:0px; min-height:5rem;" class=" mb-2 navbar navbar-main navbar-expand-lg mt-3 px-0 mx-0 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h2 class="font-weight-bolder text-white mb-0 h2" style="color: white !important; margin-bottom: 5rem;"><?= $page ?? ""?></h2>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
             
             <a href="../publicFiles/logout.php" class=""> <input type="submit" class="form-control search" value="Log out" style="color: #002365;"></a>
            </div>
          </div>
          <ul class="navbar-nav   justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner mt-1">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <strong class="fixed-plugin-button-nav cursor-pointer" style="margin-top: 20% !important; color: #fff; font-size: 115%;">Notification(s)</strong>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>