<?php 
include('security.php');
$conn=mysqli_connect("localhost","root","","ngetich");


if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$conpassword=$_POST['conpassword'];

		if($password===$conpassword)
		{

			$query="INSERT INTO admin(username, email, password) VALUES('$username','$email','$password')";
			$query_run= mysqli_query($conn, $query);

			if($query_run)
				{	
					$_SESSION['success']="User Profile Added to the database successfully ";
					header('location:register.php');
				}
			else
				{
					$_SESSION['fail']="User Profile not added to the database successfully ";
					header('location:register.php');
				}
		}
		else
		{
		    $_SESSION['pass']="the password provided do not match ";
		    header('location:register.php');
		}

}




if(isset($_POST['update_btn']))
{
	$id=$_POST['edit_id'];
	$username=$_POST['edit_username'];
	$email=$_POST['edit_email'];
	$password=$_POST['edit_password'];

	$query="UPDATE admin SET username='$username', email='$email', password='$password'WHERE ID='$id' ";
	$query_run=mysqli_query($conn, $query);
	if($query_run)
		{
			$_SESSION['success']="User Updates Added to the database successfully ";
			header('location:register.php');
		}
		else
		{
			$_SESSION['fail']="User Updates  not added to the database  ";
			header('location:register.php');
		}
}


if(isset($_POST['delete_btn']))
{
	$id=$_POST['data'];
	$query="DELETE FROM admin WHERE ID='$id' ";
	$query_run=mysqli_query($conn, $query);
	if ($query_run) 
	{
		$_SESSION['success']="The selected data deleted successfully";
		header("location:register.php");
	}
	else
	{
		$_SESSION['fail']="The Data selected data not deleted";
		header("location:register.php");
	}
}


if(isset($_POST['delete_driver']))
{
	$id=$_POST['data'];
	$query="DELETE FROM driver WHERE id_number='$id' ";
	$query_run=mysqli_query($conn, $query);

	$query="DELETE FROM fingerprint WHERE id_number='$id' ";
	$query_run=mysqli_query($conn, $query);
	
	$query="DELETE FROM user_lisence WHERE id_number='$id' ";
	$query_run=mysqli_query($conn, $query);

header('location:tables.php');
}



if(isset($_POST['login_btn']))
{
	$email_log=$_POST['email'];
	$password_log=$_POST['password'];

	$_SESSION['username']= $email_log;
		$_SESSION['user_image']=$row['user_image'];
		header('location:index.php');
}


if(isset($_POST['logout_btn']))
{
	session_destroy();
	unset($_SESSION['username']);
	header("location:login.php");
}


















?>