<?php 

include ('config.php');

$room_book_id = $_GET['room_book_id'];
$sql ="DELETE FROM `roombook` WHERE room_book_id = $room_book_id";
$sql1 ="DELETE FROM `payment_details` WHERE booking_id = $room_book_id";

$data = mysqli_query($conn,$sql);
$data1 = mysqli_query($conn,$sql1);
if ($data) {
	if($data1)
	{
	//echo "deleted";
	header('location:admin_booking_history.php');
	}
}else
{
	echo "error";
}

 ?>
