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
			align-items:center;
			justify-content:center;	
			margin-left:500px;
			margin-top:100px;
			border-radius: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
      transition: transform 0.5s ease-in-out;
	  color: #176B87;
		}
		
		.Sing-con:hover{
			transform: scale(1.02);
		}
		
		.Sing-con input{
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
			color: #176B87;
			width:80%;
			padding:2%;
			font-size: 30px;
			margin-bottom:20px;
			margin-left:7%;
		}
		
		.btn-update{
			margin-top:20px;
			margin-left:30%;
			border-radius:20px;
			padding:0.5rem;
			width:40%;
			color: #176B87;
			border-color: #176B87;
			font-size:20px;
			cursor: pointer;
		}

		.btn-update:hover{
				color:#EEF5FF;;
				background-color:#176B87;
		}
		
		.abcd2{
			margin-left:110px;
			font-size:17px;
		}
		
		.user_box{
			width: 650px;
			margin-left: 9%;
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
<body style="background-color: #EEF5FF;">
	<section class="Sign_Up">
		<!--============ signup =============-->
		<?php     
			$usermail = $_SESSION['usermail'];  
			$sql = "select * from customer where Email = '$usermail'";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					?>
			
	<div class="both">
		<div>
            <?php include 'user_view.php';?>
        </div>     
        <div class="user_box">
		<form class="user_signup" id="usersignup" action="user_profile2.php" method="POST">
			<div class="Sing-con">
				<h1 class="log" style="font-family:'fantasy';">Profile</h1>
				<input class="abc" type="text" name="name" placeholder="Name" value="<?php echo $row['name']; ?>" required><br>
				<input class="abc" type="Email" name="Email" placeholder="Email" value="<?php echo $row['Email']; ?>" required readonly><br>
				<input class="abc4" type="password" name="Password" id="pswrd" placeholder="Password" value="<?php echo $row['password']; ?>" required readonly><br>
				<input type="checkbox" class="abc3" onclick="toggleVisibility()"/>Show Password</br>  
				<input class="abc" type="tel" name="mobno" placeholder="Mobile no" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" oninvalid="this.setCustomValidity('Phone number must be 10 digit')" oninput="this.setCustomValidity('')" value="<?php echo $row['mobileno']; ?>" required><br>
					<?php $cust_id = $row['cust_id']; 
						$_SESSION['cust_id'] = $cust_id;
					?>
				<button class="btn-update" type="submit" name="user_profile_update"><b>Update Profile</b></button><br><br>			
			</div> 
		</form>
		</div>
	</div>
	<?php
	}
}
	?>
	</section>
	<script>
		function toggleVisibility() {  
		var getPasword = document.getElementById("pswrd");  
		if (getPasword.type === "password") {  
			getPasword.type = "text";  
		} else {  
			getPasword.type = "password";  
		}  
		}  
		</script>
</body>
</html>