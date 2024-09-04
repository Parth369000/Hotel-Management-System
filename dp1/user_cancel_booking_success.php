<?php

include 'config.php';
session_start();
                
                    $bookingiD = $_GET['room_book_id'];
                    $sql = "UPDATE `roombook` SET `status`='Cancel' WHERE room_book_id=$bookingiD";
                    $result = mysqli_query($conn,$sql);
                    if ($result) {
                        echo "<script>alert('Booking cancel successful');</script>";
                        echo "<script>window.location.replace('http://localhost/dp/dp1/user_cancel_booking.php')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Booking cancel unsuccessful');</script>";
                    }
                ?>