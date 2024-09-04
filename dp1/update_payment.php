<?php
include 'config.php';
    $payment_id = $_GET['payment_id'];
    $booking_id = $_GET['booking_id'];
    $paymentMethod = "Confirm";
    $sql = "UPDATE `roombook` SET `status`='$paymentMethod' WHERE room_book_id='$booking_id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>window.location.replace('http://localhost/dp/dp1/admin_payment.php')</script>";
    }
?>
