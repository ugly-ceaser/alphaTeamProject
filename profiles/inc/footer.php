






<div class="fixed-plugin">
  <div class="card shadow-lg">
    <div class="card-header pb-0 pt-3 ">
      <div class="float-start">
        <h5 class="mt-3 mb-0 text-center" style="text-decoration: none; color: #002365;">Notifications</h5>
      </div>
      <div class="float-end mt-4">
        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
          <i class="fa fa-close"></i>
        </button>
      </div>
      <!-- End Toggle Button -->
    </div>


    <hr class="horizontal dark my-1">


    <?php 
      $query = "SELECT * FROM `Notification` WHERE `not_to` = '$id' ";
      $query_result = mysqli_query($conn, $query);
      

      while ($row = mysqli_fetch_array($query_result)){ ?>
        
      


      
    
    
    



  
        <div class="notify mt-2">
          <div class="who"></div>
          <div class="message"><?=  $row['message']; ?></div>
        </div>

      <?php }?>

    
    






  </div>
</div>
</div>
    
    






  </div>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="./assets/js/plugins/chartjs.min.js"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>

</html>