<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
 ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" required class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" required class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="Password" name="password" required class="form-control" placeholder="Enter Password">
        </div>        
        <div class="form-group">
          <label>Confirm password</label>
          <input type="password" name="conpassword" required class="form-control" placeholder="Confirm Password">
        </div>
          
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
   <!--Data exapmles-->
 <div class="card show mb-4 ">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Admin Profile
      <a  data-toggle="modal" data-target="#addadminprofile"> Add Admin Profile
        
      </a>
      

    </h6>
         <p>       
          <?php
            if(isset($_SESSION['success']) && $_SESSION['success']!="")
            {
              echo '<h4 class="bg-info text-white ">'.$_SESSION['success'].'</h4>';
              unset($_SESSION['success']);
            }
            if (isset($_SESSION['fail']) && $_SESSION['fail']!="") 
            {
            echo '<h4 class="bg-info text-white>'.$_SESSION['fail'].'</h4';
              unset($_SESSION['fail']);
            }
            if(isset($_SESSION['pass']) && $_SESSION['pass']!="")
             {
              echo '<h4 class="bg-info text-white>"'.$_SESSION['pass'].'</h4>';
              unset($_SESSION['pass']);
            }
            ?>
          </p>
  </div>
  
       
          <div class="card-body">
<?php 
$conn=mysqli_connect("localhost","root","","ngetich");
$query="SELECT * FROM admin ";
$query_run=mysqli_query($conn, $query);
?>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                if(mysqli_num_rows($query_run)>0)
                {
                  while ($row=mysqli_fetch_assoc($query_run)) 
                {
                    
                ?>

                        <tr>
                          <td><?php echo $row['ID']; ?></td>
                          <td><?php echo $row['username']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <form action="register_edit.php" method="POST">
                            <td>
                              <input type="hidden" name="edit_id" value="<?php echo $row['ID']; ?>">
                              <button type="submit" class="btn btn-success" name="edit_btn">Edit</button>
                            </td>
                          </form>
                          <form action="code.php" method="POST">
                          <td>
                            <input type="hidden" name="data" value="<?php echo $row['ID']; ?>">
                            <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                          </td>
                          </form>
                        </tr>

                    <?php
                        
                       
                      }
                    }
                    else
                    {
                      echo "No Record Found";
                    }

                    ?>
                </tbody>
                
              </table>
              
            </div>
            
           </div>
      
  </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



 <?php 
include('includes/footer.php');
include('includes/scripts.php');
 ?>