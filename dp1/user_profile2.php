<?php

include 'config.php';
session_start();
?>

<html>
<head>
	<title>Login Page</title>
	<style>
		*{
			margin:0px;
			padding:0px	;
			font-family: Poppins,sens-serif;
		}
		.Sing-con{
			width:400px;
			height:450px;
			border: 3px solid black; 
			align-items:center;
			justify-content:center;	
			margin-left:500px;
			margin-top:100px
		}
		.abc{
			margin-bottom:25px;
			margin-left:10%;
			font-size:19px;
			width:80%;
			padding:2%;
		}
		.log{
			justify-content:center;
			display:flex;
			width:80%;
			padding:2%;
			font-size: 30px;
			margin-bottom:20px;
			margin-left:7%;
		}
		
		.butt{
			margin-top:20px;
			margin-left:30%;
			border-radius:5px;
			padding:0.5rem;
			width:40%;
			font-size:20px;
		}

		.abcd2{
			margin-left:110px;
			font-size:17px;
		}
		
		.user_box{
			width: 650px;
			margin-left: 15%;
		}
		.both{
			display: flex;
		}

		.abc3{
			margin-left:58%;
			font-size:17px;
			margin-bottom: 25px;
		}

		.abc4{
			margin-bottom:3px;
			margin-left:10%;
			font-size:19px;
			width:80%;
			padding:2%;
		}
	</style>
</head>
<body>
	<section class="Sign_Up">
		<!--============ signup =============-->
		<?php     
			$usermail = $_SESSION['usermail'];  
			$name = $_POST['name'];
			$Email = $_POST['Email'];
			$password = $_POST['Password'];
			$mobno = $_POST['mobno'];
			$cust_id = $_SESSION['cust_id'];
			if(isset($_POST['user_profile_update'])) {
				$sql = "UPDATE customer SET name='$name',Email='$Email',Password='$password',mobileno='$mobno' where cust_id=$cust_id";
				$result = mysqli_query($conn,$sql);
				if($result)
				{
					echo "<script>alert('Profile updated');</script>";
					echo "<script>window.location.replace('http://localhost/dp/dp1/user_profile.php')</script>";

				}
			}
	?>
	</section>

</body>
</html>
