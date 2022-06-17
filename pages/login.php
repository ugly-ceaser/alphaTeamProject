<?php
include './inc/header.php'
?>





      <div>
          <section id="home" class=" col-lg-12 col-md-12 ">

          <p class="form-message"></p>
            
           <div class="contact-section">

            <h1>Login</h1>
            <div class="border"></div>
            <form action="contact.php" class="contact-form" method="post">
                
            <input id="email-validation" type="text" name="Email"  class="contact-form-text" placeholder="Your Email">

            <input id="password-validation" type="password" name="Password"   class="contact-form-text" placeholder="Your password">

            <div class="form-check">
        <input class="form-check-input" type="checkbox" value="setCookie" id="flexCheckChecked" checked="">
        <label class="form-check-label" for="flexCheckChecked">
          Remember me
        </label>
         </div>
                
            <div class="col-12">
                    <input id="submit-validation" type="submit" name="submit" class="contact-form-btn" value="Login">
                    <label class="form-check-label mt-5" for="flexCheckChecked">
                      Don't Have an account? <a style="color:#023366 ; text-decoration: none;" href="./register.php">Register</a>
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
<script>
  $(document).ready(()=>{


  

    $("form").submit((event)=>{
      event.preventDefault();



    

      let Email = $("#email-validation").val();

     

      let Password = $("#password-validation").val();

      

     

    


      let submit = $("#submit-validation").val();


      $(".form-message").load("./scripts/loginScript.php",{

        

         
          
          Email : Email ,
          Password :  Password ,
          submit: submit 


      });


    })
  })

 







</script>
<script src="../js/lib/bootstrap/bootstrap.js"></script>
<script src="../js/animation.js"></script>
<script src="../js/index.js"></script>
</html>