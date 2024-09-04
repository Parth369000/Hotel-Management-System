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
			height:550px;
			background-color:#EEF5FF;
			align-items:center;
			justify-content:center;	
			margin-left:500px;
			margin-top:50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.7);
			transition: transform 0.5s ease-in-out;
		}
		
		.Sing-con:hover{
		transform: scale(1.02);	
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
			color:#176B87;;
			font-size:40px;
		}
		
		.butt{
			margin-top:20px;
			margin-left:35%;
			border-radius:5px;
			padding:0.5rem;
			width:30%;
			font-size:20px;
			font-weight: 600;
			background-color:#EEF5FF;
			color:#176B87;
			cursor:pointer;
		}
		.butt:hover{
			background-color: #176B87;
			color:#EEF5FF;
			
		}
		.abcd2{
			margin-left:110px;
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
                if (isset($_POST['user_signup_submit'])) {
                    $name = $_POST['name'];
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];
                    $CPassword = $_POST['CPassword'];
					$mobno = $_POST['mobno'];

                        if ($Password == $CPassword) {
                            $sql = "SELECT * FROM customer WHERE Email = '$Email'";
                            $result = mysqli_query($conn, $sql);
    
                            if ($result->num_rows > 0) {
                                echo "<script>alert('Email already exits');</script>";
								echo "<script>window.location.replace('http://localhost/dp/dp1/register.php')</script>";
                            } 
							else {
								
                                $sql = "INSERT INTO customer (name,Email,password,mobileno) VALUES ('$name', '$Email', '$Password','$mobno')";
                                $result = mysqli_query($conn, $sql);
    
                                if ($result) {
                                    $_SESSION['usermail']=$Email;
                                    $name = "";
                                    $Email = "";
                                    $Password = "";
                                    $CPassword = "";
									$mobno = "";
                                    header("Location: login.php");
                                } else {
                                    echo "<script>alert('Something went wrong');
                                    </script>";
                                }
                            }
                        } else {
                            echo "<script>('Password does not matched');
                            </script>";
                        }
                    
                }
            ?>
	<section class="Sign_Up">
	<form action="" method="POST" id="user-register" class="user-register">
	<div class="Sing-con">
		<h1 class="log">Sign Up</h1>
		<input class="abc" type="text"  name="name" placeholder="Name" required><br>
		<input class="abc" type="Email" name="Email" placeholder="Email" required><br>
		<input class="abc" type="password" name="Password" placeholder="Password" required><br>
		<input class="abc" type="password" name="CPassword" placeholder="Confirm Password" required><br>
		<input class="abc" type="tel" name="mobno" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" oninvalid="this.setCustomValidity('Phone number must be 10 digit')" oninput="this.setCustomValidity('')" placeholder="Mobile no" required>
		<input class="butt" type="submit" id="user_signup_submit" name="user_signup_submit" value="Sign up"><br><br>
		<p class="abcd2">Already have an account? <a  href="login.php">Login</a></p>
	</div> 
	</form>
	</section>
	
</body>
</html>
