<?php
include './inc/header.php'
?>
<script>
  $(document).ready(()=>{


  

    $("form").submit((event)=>{
      event.preventDefault();


      let  Firstname = $("#fname-validation").val();
     
      let Email = $("#email-validation").val();

      let  PhoneNumber = $("#phone-validation").val();

      let ContactMessage = $("#message-validation").val();

      let submit = $("#submit-validation").val();


      $(".form-message").load("./scripts/contactScript.php",{

        

          Firstname : Firstname ,
         
          Email : Email ,
         
          PhoneNumber : PhoneNumber ,
          ContactMessage : ContactMessage ,
          submit: submit 


      });


    })
  })

 </script>

      <div>
          <section id="home" class=" col-lg-12 col-md-12 ">
            
           <div class="contact-section">

           <p class="form-message"></p>

            <h1>Contact Us</h1>
            <div class="border"></div>
            <form action="./scripts/contactScript.php" class="contact-form" method="post">
            <input id="fname-validation" type="text" name="Firstname"  class="contact-form-text" placeholder="first name">

            <input id="email-validation" type="text" name="Email"  class="contact-form-text" placeholder="Your Email">

            <input id="phone-validation" type="text" name="PhoneNumber"  class="contact-form-text" placeholder=" Phone Number">

             <textarea name="ContactMessage" id="message-validation" class="contact-form-text" placeholder="Your Message"></textarea>
                <input id="submit-validation" type="submit" name="submit" class="contact-form-btn" value="Send">
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