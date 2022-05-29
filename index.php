<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#023366">
    <link rel="apple-touch-icon" href="./img/logo192.png" type="image/png">
    <link rel="icon" href="./img/logo192.png" type="image/png">
    <link rel="stylesheet" href="./css/lib/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./css/main.scss">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="manifest" href="./manifest.json">

    <title>The ALPHA PROJECT</title>
</head>
<script>




if("serviceWorker" in navigator){
    navigator.serviceWorker.register("sw.js").then(registration =>{
        console.log("SW Register");
        console.log(registration);
    }).catch(error => {
        console.log("SW not Register");
        console.log(error);
    })
}





</script>
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
                      <a class="nav-link active" href="#" style="color: var(--white) !important">Home
                        <span class="visually-hidden">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a style="color: var(--white) !important" class="nav-link" href="./pages/competetion.php">Competion</a>
                    </li>
                    <li class="nav-item">
                      <a style="color: var(--white) !important" class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a  style="color: var(--white) !important"class="nav-link" href="./pages/contact.php">Contact</a>
                    </li>
                  
                  </ul>
                  <form class="d-flex">
                      <a style="color: var(--white) !important" class="nav-link" href="./pages/register.php">Register</a>
                      <a style="color: var(--white) !important" class="nav-link" href="./pages/login.php">Login</a>
                  </form>
                </div>
              </div>
    </nav>

      <div>
          <section id="home" class="home col-lg-12 col-md-12 ">
            
            <h1 class="  lax_preset_rightToLeft:.1 lax_preset_fadeInOut " style="opacity: 0.5;" >ALPHA TEAM</h1>
            <p style="opacity: 0.5;" class="desc lax lax_preset_fadeInOut:244.75:0">MAGIC MEETS PERFORMANCE</p>
           <div class="box1 lax lax_preset_fadeIn:50:100 lax_preset_spin"></div>
           <div class="box2 lax lax_preset_fadeIn:50:100 lax_preset_spin "></div>
    



          </section>

        <section id="about">
            <div class="about-1">
                <h1 >ABOUT US</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minima, aspernatur. Recusandae, sed. Optio nobis ad eveniet ullam ipsam, error
                deserunt illo eligendi similique, officia modi culpa autem nostrum quis eaque!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit, debitis illum? Ipsa eligendi non quas minima inventore
                vitae mollitia labore alias accusamus beatae sed tenetur fugit quos, perspiciatis nulla iste?
                
                </p>
            </div>
            <div id="about-2">
                  <div class="content-box-lg">
                  <div class="container">
                  <div class="row">
                      <div class="col-md-4">
                          <div class=" mt-5" >
                                    <i class="fa fa-book"></i>
                                    <h3 class="text-center" style="font-weight: bold"  >COMPETITION </h3>
                          
                            
                                      <p class="text-center" style="font-weight: bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam rerum cumque obcaecati id eum, autem voluptatum
                                      quo tempore tenetur mollitia tempora asperiores animi ut similique voluptatibus veniam odit quidem! Fuga.</p>
                      
                            </div>
                      </div>


                      <div class="col-md-4">
                          <div class=" mt-5" >
                                    <i class="fa fa-book"></i>
                                    <h3 class="text-center" style="font-weight: bold"  >COMPETITION </h3>
                          
                            
                                      <p class="text-center" style="font-weight: bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam rerum cumque obcaecati id eum, autem voluptatum
                                      quo tempore tenetur mollitia tempora asperiores animi ut similique voluptatibus veniam odit quidem! Fuga.</p>
                      
                            </div>
                      </div>


                      <div class="col-md-4">
                          <div class=" mt-5" >
                                    <i class="fa fa-book"></i>
                                    <h3 class="text-center" style="font-weight: bold"  >COMPETITION </h3>
                          
                            
                                      <p class="text-center" style="font-weight: bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam rerum cumque obcaecati id eum, autem voluptatum
                                      quo tempore tenetur mollitia tempora asperiores animi ut similique voluptatibus veniam odit quidem! Fuga.</p>
                      
                            </div>
                      </div>


                  </div>     
               
              
                 

            </div>
            
        </section>
         
        
          <section id="contact" class="contact">
          </section>
          <footer id="footer">
           htfghb
          </footer>
      </div>

   
  


    
</body>
<script src="node_modules/lax.js/lib/lax.min.js"></script>
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
<script src="./js/lib/bootstrap/jquery-3.5.1.js"></script>
<script src="./js/lib/bootstrap/bootstrap.js"></script>
<script src="./js/animation.js"></script>
<script src="./js/index.js"></script>
</html>