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
			background-color:#EEF5FF;
			align-items:center;
			justify-content:center;	
			margin-left:500px;
			margin-top:100px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.7);
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
			margin-bottom:20px;
			margin-left:10%;
			color:#176B87;
			font-size:30px;
		}
		
		.butt{
			margin-top:20px;
			margin-left:35%;
			border-radius:5px;
			padding:0.5rem;
			width:30%;
			font-size:20px;
			font-weight:600;
			color:#176B87; 
			background-color:#EEF5FF;
			cursor:pointer;
		}
		.butt:hover{
			background-color: #176B87;
			color:#EEF5FF;
			
		}
		.abcd2{
			margin-left:160px;
			font-size:17px;
			color: #176B87;
		}
		a{
			color: #176B87;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_POST['user_forget_submit']))
		{
			$Email = $_POST['Email'];
			$OPassword = $_POST['OPassword'];
			$Password = $_POST['Password'];
			$CPassword = $_POST['CPassword'];
			
			$sql = "SELECT * FROM customer WHERE Email = '$Email' AND password = '$OPassword'";
				$result = mysqli_query($conn, $sql);
				
				if($result -> num_rows > 0)
					{
						if($Password == $CPassword)
						{
							$sql = "UPDATE customer SET password = '$Password' WHERE Email = '$Email' ";
							$result = mysqli_query($conn, $sql);
								echo "<script>alert('Password change successfully');</script>";
								header("Location: login.php");
						}
						else
						{
							echo "<script>alert('Password must be same');</script>";
						}
					}
				else
					{
						echo "<script>alert('Email and Password does not match');</script>";
					}
		}
	?>
	<section class="Sign_Up">
		<form action="" method="POST" id="user-forget" class="user-forget">
		<div class="Sing-con">
			<h1 class="log">Forgot Password</h1>
			<input class="abc" type="Email" name="Email" placeholder="Email" required><br>
			<input class="abc" type="password" name="OPassword" placeholder="Old Password" required><br>
			<input class="abc" type="password" name="Password" placeholder="New Password" required><br>
			<input class="abc" type="password" name="CPassword" placeholder="Confirm New Password" required><br>
			<input class="butt" type="submit" id="user_forget_submit" name="user_forget_submit" value="Submit"><br><br>
			<p class="abcd2">Go to <a  href="login.php">Login</a></p>
		</div> 
		</form>
	</section>
</body>
</html>
