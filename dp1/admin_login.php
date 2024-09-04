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
<body>
	<?php
		if(isset($_POST['user_login_submit']))
		{
			$Email = $_POST['Email'];
			$Password = $_POST['Password'];
			
			$sql = "SELECT * FROM admin_login WHERE Email = '$Email' ";
                            $result = mysqli_query($conn, $sql);
    
                            if ($result->num_rows == 0) {
                                echo "<script>alert('Email not exits');
                                </script>";
                            } 
							else
							{
								$sql = "SELECT * FROM admin_login WHERE Email = '$Email' AND Password = '$Password'";
								$result = mysqli_query($conn, $sql);
								
								if ($result->num_rows > 0) 
								{
									$_SESSION['usermail'] = $Email;
									header("Location: dashboard.php");
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
		<!--<a class="abcd" href="forgot_password.php">Forgot Password</a><br> -->
		<input type="submit" class="butt" value="Login" id="user_login_submit" name="user_login_submit"> <br><br>
		<!-- <p class="abcd2">for new user?  <a  href="register.php">Sign Up</a></p> -->
		
	</div>
	</form>
	</section>
</body>
</html>
