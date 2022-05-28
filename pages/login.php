<?php
include './inc/header.php'
?>
      <div>
          <section id="home" class=" col-lg-12 col-md-12 ">
            
           <div class="contact-section">

            <h1>Login</h1>
            <div class="border"></div>
            <form action="contact.php" class="contact-form" method="post">
                
                <input type="email" name="userEmail" class="contact-form-text" placeholder="Your email" required>

                <input type="password" name="userPassword" class="contact-form-text" placeholder="Your Password" required>
                
                <input type="submit" class="contact-form-btn" value="Login">
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