<?php include "config.php"; ?>
<html>
<body>
<?PHP
if($isset("submit"))
{
	
	
			$name = $_POST['name'];
			$Email = $_POST['Email'];
			
			$sql = "INSERT INTO customer (`name`, `Email`) VALUES ('$name', '$Email')";
			
			$result = mysqli_query($conn, $sql);
}
?>
<form method="POST" >
<input class="abc" type="text"  name="name" placeholder="Name" required><br>
<input class="abc" type="Email" name="Email" placeholder="Email" required><br>
<input class="abc" type="submit" name="submit" placeholder="Email" required><br>

</form>
		</body>
		</html>