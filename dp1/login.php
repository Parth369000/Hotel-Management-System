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
			font-family: sens-serif;
		}
		.login-con{
			width:400px;
			height:350px;
			border-radius:5px;
			background-color:#EEF5FF;
			aling-item:center;
			justify-content:center;	
			margin-left:500px;
			margin-top:100px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.7);
			transition: transform 0.5s ease-in-out;
		}
		
		.login-con:hover{
		transform: scale(1.02);	
		}
		
		.login-con input{
		 border: 1px solid #176B87;	
		 color: #176B87;
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
			margin-left:8%;
			color:#176B87;
			font-size:40px;
		}
		.abcd{
			margin-bottom:20px;
			margin-left:62%;
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
			color: #EEF5FF;
			
		}
		.abcd2{
			margin-left:130px;
			font-size:17px;
			color: #176B87;
		}
		a{
			color: #176B87;
		}
	</style>
</head>
<body style="background-color: #EEF5FF;">
	<?php
		if(isset($_POST['user_login_submit']))
		{
			$Email = $_POST['Email'];
			$Password = $_POST['Password'];
			
			$sql = "SELECT * FROM customer WHERE Email = '$Email' ";
			$sql1 = "SELECT * FROM admin_login WHERE Email = '$Email'";
                            $result = mysqli_query($conn, $sql);
							$result1 = mysqli_query($conn,$sql1);
                            
							if($result1->num_rows > 0)
							{
								$sql = "SELECT * FROM admin_login WHERE Email = '$Email' AND password = '$Password'";
								$result = mysqli_query($conn, $sql);
								
								if ($result->num_rows > 0) 
								{
									$_SESSION['usermail'] = $Email;
									header("Location: admin_view.php");
								}
							}
							else if($result->num_rows == 0)
							{
								 echo "<script>alert('Email not exits');
                                </script>";
							}
							else
							{
								$sql = "SELECT * FROM customer WHERE Email = '$Email' AND password = '$Password'";
								$result = mysqli_query($conn, $sql);
								
								if ($result->num_rows > 0) 
								{
									$_SESSION['usermail'] = $Email;
									header("Location: user_view.php");
								}
							}
		}
	?>
	<section class="Login">
	<form action="" method="POST" id="user-register" class="user-register">
	<div class="login-con">
		<h1 class="log">Login</h1>
		<input class="abc" type="email" placeholder="Email" name="Email" required><br>
		<input class="abc" type="password" placeholder="Password" name="Password" required>
		<a class="abcd" href="forgot_password.php">Forgot Password</a><br>
		<input type="submit" class="butt" value="Login" id="user_login_submit" name="user_login_submit"> <br><br>
		<p class="abcd2">for new user?  <a  href="register.php">Sign Up</a></p>
		
	</div>
	</form>
	</section>
</body>
</html>
