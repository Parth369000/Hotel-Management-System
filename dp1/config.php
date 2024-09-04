<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "dp";
	
	$conn = mysqli_connect($server,$username,$password,$database);
	
	if(!$conn)
	{
		die("<script>alert('connection failed.')</script>");
	}
	/*else
	{
		echo "<script>alert('connection successfully');</script>";
	}*/
?>