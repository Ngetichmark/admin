<?php 
include('security.php');
include('db.php');


if(isset($_POST['login_btn']))
{
	$email_log=$_POST['email'];
	$password_log=$_POST['password'];

	$query="SELECT * FROM admin WHERE email='$email_log' AND password='$password_log' ";
	$query_run=mysqli_query($conn, $query);

	if(mysqli_fetch_array($query_run))
	{	
		foreach($query_run as $row)
		{

		$_SESSION['username']= $row['username'];
		header('location:index.php');
		}
	}
	else
	{
		$_SESSION['success']="Ivalid password or Email";
		header("location:login.php");
	}
}

 ?>