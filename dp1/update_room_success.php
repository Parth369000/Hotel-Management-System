<?php
include 'config.php';
session_start();
// Assuming $room_id is provided through some means (e.g., GET or POST)
$room_id = $_SESSION['room_id'];

if (isset($_POST['add_room'])) {
    $roomType = $_POST['roomType'];
    $price = $_POST['price'];
    $status = $_POST['status'];

    


    // Ensure $room_id is properly defined and not empty
    if (!empty($room_id)) {
        $sql = "UPDATE room SET roomType = '$roomType', price = '$price', status = '$status' WHERE room_id = '$room_id'";

        $data = mysqli_query($conn, $sql);

        if ($data) {
            // echo "Record updated";
            echo "<script>alert('Room Updated');</script>";
            echo "<script>window.location.replace('http://localhost/dp/dp1/add_rooms.php')</script>";
        } else {
            echo "Not updated. Error: " . mysqli_error($conn);
        }
    } else {
        echo "Room ID is missing or invalid.";
    }
} else {
    echo "Click on the button to save the change.";
}
?>
