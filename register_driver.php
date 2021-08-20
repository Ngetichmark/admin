<?php 

include('security.php');
include('includes/header.php');
include('includes/navbar.php')
?>

 <form action="driver_code.php" method="POST" enctype="multipart/form-data">
      
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" required class="form-control" placeholder="Enter Username">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" required class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label>Indentification Number</label>
          <input type="text" name="ID_Number" required class="form-control" placeholder="Enter Indentification Number">
        </div>
        <div class="form-group">
        <label> Upload Passport</label>
          <div><input class="btn btn-primary" type="file" id="image" name="image"></div>
        </div>
        <div class="form-group">
          <label>Place Your Fingerprint Scanner</label>
          <div>
            <pre> <img src="fingerprint.png" width="70px" height="100px">                <img src="fingerprint.png" width="70px" height="100px"></pre>
          </div>
          
        </div>

       
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="temp_name" name="register_driver">Register</button>
      </div>
  </form>


<?php
include('includes/footer.php');
include('includes/scripts.php');
 ?>
