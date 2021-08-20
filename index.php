\<?php 

include('security.php');
include('includes/header.php');
include('includes/navbar.php')
?>
 <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Registed Administrators</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      	<?php 
                      	$query="SELECT ID FROM admin ORDER BY ID";
                      	$query_run=mysqli_query($conn, $query);
                      	$row=mysqli_num_rows($query_run);
                      	echo "<h4>Total Admins :</h4>";
                      	 ?>
                  	  </div>
                    </div>
                    <div class="col-auto">
                      <?php echo "<h3>".$row."</h3>"; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>





          </div>

          <!-- Content Row -->


       
   





<?php
include('includes/footer.php');
include('includes/scripts.php');
 ?>
