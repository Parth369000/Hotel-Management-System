<?php 

include ('config.php');

$cust_id = $_GET['cust_id'];
$sql ="DELETE FROM `customer` WHERE cust_id=$cust_id";

$data = mysqli_query($conn,$sql);

if ($data) {
	echo "deleted";
	header('location:manage_profile.php');
}else
{
	echo "error";
}

 ?>
