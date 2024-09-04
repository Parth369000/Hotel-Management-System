<?php

include 'config.php';
session_start();

	$roomType = $_POST['roomType'];	
	$price = $_POST['price'];
	$status = $_POST['status'];	
	
	if(isset($_POST['add_room'])){
		$query="INSERT INTO room (roomType,price,status) VALUES ('$roomType',$price,'$status')";
		
		$result = mysqli_query($conn,$query);
		
		if($result)
		{
			echo "<script>alert('Room add successful');</script>";
			echo "<script>window.location.replace('http://localhost/dp/dp1/add_rooms.php')</script>";
		}
		else
		{
			echo mysqli_error();
		}
	}
	else
	{
		echo mysqli_error();	
	}
  ?>