<?php 
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
$conn=mysqli_connect("localhost","root","","ngetich");
$query="SELECT * FROM driver ";
$query_run=mysqli_query($conn, $query);
?>


<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">These are the list of Drivers that have already been registered in our site </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>ID Number</th>
                      <th>Phone Number </th>
                      <th>Gender</th>
                      <th>Date of Birth</th>
                      <th>Delete</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
 if(mysqli_num_rows($query_run)>0)
      {
      while ($row=mysqli_fetch_array($query_run)) 
          {  
          ?>
              <tr> <td><?php echo $row['ID']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['id_number']; ?></td>
              <td><?php echo $row['phone_number'];  ?></td>
              <td><?php echo $row['gender']; ?></td>
              <td><?php echo $row['date_of_birth']; ?></td>
                      <form action="code.php" method="POST">
                          <td>
                            <input type="hidden" name="data" value="<?php echo $row['id_number']; ?>">
                            <button type="submit" name="delete_driver" class="btn btn-danger">Delete</button>
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