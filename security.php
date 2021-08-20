<?php 
include('includes/preloader.php');
session_start();
$conn=mysqli_connect("localhost","root","","ngetich");

/*
include('database/dbconfig.php');
if($dbconfig)
{
	//echo "database connected";
}
else
{
	header('location:database/dbconfig.php');
}
*/
if(!$_SESSION['username'])
{
	header('location:login.php');
}


 ?>