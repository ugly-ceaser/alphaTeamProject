<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/lib/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/main.scss">
    <link rel="stylesheet" href="../css/style.css">
    <title>The ALPHA PROJECT</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg" style="background-color:var(--blue) !important; color: var(--white) !important;">
        <div class="container-fluid" style="background-color:var(--blue); color: var(--white) !important">
          <a  style="color: var(--white) !important" class="navbar-brand" href="#">ALPHA</a>
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
                <a style="color: var(--white) !important" class="nav-link" href="../index.php">About Us</a>
              </li>
              <li class="nav-item">
                <a  style="color: var(--white) !important"class="nav-link" href="#Contact">Contact</a>
              </li>
             
            </ul>
            <form class="d-flex">
                <a style="color: var(--white) !important" class="nav-link" href="#">Register</a>
                <a style="color: var(--white) !important" class="nav-link" href="#">Login</a>
            </form>
          </div>
        </div>
      </nav>


      <section id="competion" class="competion">
        <div class="container">
          <div class="row">
            <h1 class="col-12  p-3" style="display:flex; background-color:var(--blue); color: var(--white) !important;     height:12rem; align-items:flex-end !important;">
              
              <span class="display5 text-light">

                Competetion
              </span>

            </h1>
            
          </div>
        </div>

       






        <div class="box3 lax lax_preset_fadeIn:50:100 lax_preset_spin"></div>
        <div class="box4 lax lax_preset_fadeIn:50:100 lax_preset_spin ">
         
        </div>
        <div class="row">
            <div class="col-12 header">


            </div>
       </div>
 
      
      


      </section>

  
    
    </body>
    <script src="../node_modules/lax.js/lib/lax.min.js"></script>
    <script>
      window.onload = function () {
        lax.init()
    
        // Add a driver that we use to control our animations
        lax.addDriver('scrollY', function () {
          return window.scrollY
        })
    
        // Add animation bindings to elements
        lax.addElements('.selector', {
          scrollY: {
            translateX: [
              ["elInY", "elCenterY", "elOutY"],
              [0, 'screenWidth/2', 'screenWidth'],
            ]
          }
        })
      }
    </script>
    <script src="../js/lib/bootstrap/jquery-3.5.1.js"></script>
    <script src="../js/lib/bootstrap/bootstrap.js"></script>
    <script src="../js/animation.js"></script>
    <script src="../js/index.js"></script>
    </html>