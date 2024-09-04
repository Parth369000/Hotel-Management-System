<?php 

include ('config.php');

$room_id = $_GET['room_id'];
$sql ="DELETE FROM `room` WHERE room_id=$room_id";

$data = mysqli_query($conn,$sql);

if ($data) {
	echo "deleted";
	header('location:add_rooms.php');
}else
{
	echo "error";
}

 ?>

