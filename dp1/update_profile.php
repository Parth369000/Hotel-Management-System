<?php

include 'config.php';
session_start();
$cust_id = $_GET['cust_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
        background-color: transparent;
        width: 400px;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
      transition: transform 0.5s ease-in-out;
    }

    form:hover {
      transform: scale(1.02);
    }

    h1 {
      text-align: center;
      color: #176B87;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #86B6F6;
    }

    .text-box{
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      transition: border-color 0.7s ease-in-out;
    }

    .text-box:focus{
      border-color: #4caf50;
    }

    .btn-update {
     color:#176B87;
	  background-color:#EEF5FF;
      padding: 10px 15px;
       border: 2px solid #176B87;
      border-radius: 25px;
      cursor: pointer;
    }

    .btn-update:hover {
     color: #EEF5FF;
      background-color: #176B87;
    }

    .abc3{
        margin-left: 67%;
			font-size:17px;
			margin-bottom: 25px;
		}
  </style>
  <title>Add New Customer</title>
</head>
<body style="background-color: #EEF5FF;">
  <form action="update_profile_success.php" method="post" >
    <h1>Update Customer</h1>
    <label for="Name">Name : </label>
    <input type="text" name="name" id="room-number" class="text-box" value="<?php echo $_GET['name'];?>" required>
    <br>
    <label for="email">Email : </label>
    <input type="email" name="Email" id="capacity" class="text-box" value="<?php echo $_GET['Email'];?>" required readonly>
    <br>
    <label for="password">Password : </label>
    <input type="password" name="Password" id="price" class="text-box" value="<?php echo $_GET['Password'];?>" required>
    <input type="checkbox" class="abc3" onclick="toggleVisibility()"/>Show Password
    <input type="tel" name="mobno" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" oninvalid="this.setCustomValidity('Phone number must be 10 digit')" oninput="this.setCustomValidity('')" class="text-box" value="<?php echo $_GET['mobno'];?>" required>
    <br>
    <?php 
        $_SESSION['cust_id'] = $cust_id;
    ?>
    <button type="submit" name="add_customer" class="btn-update">Update profile</button>
  </form>

  <script>
		function toggleVisibility() {  
		var getPasword = document.getElementById("price");  
		if (getPasword.type === "password") {  
			getPasword.type = "text";  
		} else {  
			getPasword.type = "password";  
		}  
		}  
		</script>
</body>
</html>
