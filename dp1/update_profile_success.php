<?php

include 'config.php';
session_start();
     
			//$usermail = $_SESSION['usermail'];  
			$name = $_POST['name'];
			$Email = $_POST['Email'];
			$password = $_POST['Password'];
			$mobno = $_POST['mobno'];
			$cust_id = $_SESSION['cust_id'];
			//echo $cust_id;
			if(isset($_POST['add_customer'])) {
				
				$sql = "UPDATE customer SET name='$name',Email='$Email',Password='$password',mobileno='$mobno' where cust_id=$cust_id";
				$result = mysqli_query($conn,$sql);
				if($result)
				{
					echo "<script>alert('Profile updated');</script>";
					echo "<script>window.location.replace('http://localhost/dp/dp1/manage_profile.php')</script>";

				}
			}
			
	?>