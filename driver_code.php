<?php 
include('security.php');
$conn=mysqli_connect("localhost","root","","ngetich");


if(isset($_POST['register_driver']))
{
	$target = "images/ ".basename($_FILES['image']['name']);

	$username = $_POST['username'];
	$email = $_POST['email'];
	$ID_Number = $_POST['ID_Number'];

	
	$user_image = $_FILES['image']['name'];

    $query = " INSERT INTO admin (username, email, ID_Number, user_image) VALUES('$username','$email', '$ID_Number','$user_image')  ";
    $query_run= mysqli_query($conn, $query);
    if(!$query_run)
    {
      if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
    	 header("location:index.php");
        }
      else {
    	echo "Not inserted";
       }
    }
    else
    {
    	echo "Not Inserted To the database";
    }
   





}




 ?>