<?php
include './inc/header.php'
?>
<div>

<script>
  $(document).ready(()=>{
    $("form").submit((event)=>{
      event.preventDefault();
      let firstName = $("fname-validation").val();

      let lastName = $("lname-validation").val();

      let userName = $("userName-validation").val();

      let email = $("email-validation").val();

      let password = $("password-validation").val();

      let passwordConfirmation = $("retypepasswod-validation").val();

      let userPhoneNumber = $("phone-validation").val();

      let CheckIfWhatsapp =$("whatsapp-validation").val();

      let formSubmit=$("submit-validation").val();


      $(".form-message").load("./scripts/reg.php",{

          userFirstname : firstName ,
          userLastname : lastName ,
          userName :  userName ,
          userEmail : email ,
          userPassword : password ,
          userPasswordRetype : passwordConfirmation ,
          userPhoneNumber : userPhoneNumber ,
          isWhatsappLine : CheckIfWhatsapp ,
          submit: formSubmit 


      });


    })
  })

 







</script>
          <section id="home" class=" col-lg-12 col-md-12 ">
            
           <div class="contact-section">

            <h1>Register</h1>
            <div class="border"></div>

            <p class="form-message"></p>
           
            <form action="./scripts/reg.php" class="contact-form" method="post">
              <div class="row">
                  <div class="col-6">
                    <input id="fname-validation" type="text" name="userFirstname"  class="contact-form-text" placeholder="Your Username">
                    <input type="text" name="userName"  class="contact-form-text" placeholder="Your Username">
                  

                  </div>
                  <div class="col-6">
                    <input id="lname-validation" type="text" name="userLastname"  class="contact-form-text" placeholder="Your Lastname">
                   
                    
                    
                  </div>
                  <div class="col-12">
                    <input id="email-validation" type="text" name="userEmail"  class="contact-form-text" placeholder="Your email">

                    
                    
                  </div>
                  <div class="col-6">
                    <input id="password-validation" type="password" name="userPassword"   class="contact-form-text" placeholder="Your password">

                    
                    
                  </div>
                  <div class="col-6">
                    <input id="retypepasswod-validation" type="password" name="userPasswordRetype"  class="contact-form-text" placeholder="Retype password">

                    
                    
                  </div>
                  <div class="col-6">
                    <input id="phone-validation" type="text" name="userPhoneNumber"  class="contact-form-text" placeholder="Your Phone Number">

                  </div>

                  <div class="col-6 p-5">
                  
                    <div class="form-check form-switch">
                      <input id="whatsapp-validation" class="form-check-input" name= "isWhatsappLine" value="true" type="checkbox" id="flexSwitchCheckDefault">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Whatsapp line ?</label>
                    </div>

                  </div>

                  <div class="col-12">
                    <input id="submit-validation" type="submit" name="submit" class="contact-form-btn" value="Register">
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