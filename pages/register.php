<?php
include './inc/header.php'
?>
<div>

<script>
  $(document).ready(()=>{


  

    $("form").submit((event)=>{
      event.preventDefault();


      

    

      let Username = $("#username-validation").val();

    

      let Email = $("#email-validation").val();

     

      let Password = $("#password-validation").val();

      

      let  PasswordRetype = $("#retypepasswod-validation").val();

     

      let  PhoneNumber = $("#phone-validation").val();

     

      let WhatsappLine = $("#whatsapp-validation").val();

    


      let submit = $("#submit-validation").val();


      $(".form-message").load("./scripts/regScript.php",{

        

          
          Username :  Username ,
          Email : Email ,
          Password :  Password ,
          PasswordRetype : PasswordRetype ,
          PhoneNumber : PhoneNumber ,
          WhatsappLine : WhatsappLine ,
          submit: submit 


      });


    })
  })

 







</script>
          <section id="home" class=" col-lg-12 col-md-12 ">
            
           <div class="contact-section">

            <h1>Register</h1>
            <div class="border"></div>

            <p class="form-message">
              
            </p>
           
            <form action="./scripts/reg.php" class="contact-form" method="post">
              <div class="row">
                 
                  <div class="col-12">
                    <input id="email-validation" type="text" name="Email"  class="contact-form-text" placeholder="Your Email">

                    
                    
                  </div>

                  <div class="col-6">
                    <input id="username-validation" type="text" name="Username"   class="contact-form-text" placeholder="Your Username">

                    
                    
                  </div>
                  <div class="col-6">
                    <input id="password-validation" type="password" name="Password"   class="contact-form-text" placeholder="Your password">

                    
                    
                  </div>
                  <div class="col-6">
                    <input id="retypepasswod-validation" type="password" name="PasswordRetype"  class="contact-form-text" placeholder="Retype password">

                    
                    
                  </div>
                  <div class="col-6">
                    <input id="phone-validation" type="text" name="PhoneNumber"  class="contact-form-text" placeholder="Your Phone Number">

                  </div>

                  <div class="col-6 p-5">
                  
                    <div class="form-check form-switch">
                      <input id="whatsapp-validation" class="form-check-input" name= "WhatsappLine" value= "true" type="checkbox">
                      <label class="form-check-label" >Whatsapp line ?</label>
                    </div>

                  </div>

                  <div class="col-12">
                    <input id="submit-validation" type="submit" name="submit" class="contact-form-btn" value="Register">
                    <label class="form-check-label mt-5" for="flexCheckChecked">
                      Already Have an account? <a style="color:#023366 ; text-decoration: none;" href="./login.php">Login</a>
                     </label>
                  </div>


                 
                </div>

          </form>
           
               
                
               
               
           
           </div>
    



          </section>

         
        
          <footer id="footer">

          </footer>
      </div>
</body>

<script src="../js/lib/bootstrap/jquery-3.5.1.js"></script>
<script src="../js/lib/bootstrap/bootstrap.js"></script>
<script src="../js/animation.js"></script>
<script src="../js/index.js"></script>
</html>