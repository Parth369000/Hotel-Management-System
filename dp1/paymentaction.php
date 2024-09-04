<?php
include 'config.php';

                    $bookingId = $_GET['bid'];
                    $paymentmethod = $_POST['payment_method'];
                    //echo $paymentmethod . $bookingId;
                    
                    if(isset($_POST['submit_btn'])){

                    
                    if ($paymentmethod === 'cash') // Changed assignment operator to comparison operator
                    {
                        $amount = $_POST['amount'];
                        $sql = "INSERT INTO `payment_details`(`booking_id`, `paymentmethod`,`amount`) VALUES ('$bookingId','$paymentmethod','$amount')";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                            $sql = "UPDATE roombook SET `status`='cash' WHERE room_book_id = '$bookingId'";
                            $result1 = mysqli_query($conn, $sql);
                            if($result1)
                            {
                                echo "<script>alert('payment Successful');</script>";
                                echo "<script>window.location.replace('http://localhost/dp/dp1/user_booking_history.php')</script>";
                            }
                        }
                    }

                    else if($paymentmethod === 'card')
                    {   

                        $cardName=$_POST['cardName'];
                        $cardNumber = $_POST['cardNumber'];
                        $cardMonth = $_POST['cardMonth'];
                        $cardYear=$_POST['cardYear'];
                        $cardCvv = $_POST['cardCvv'];
                        $amount = $_POST['amount'];

                        $sql = "INSERT INTO `payment_details`(`booking_id`, `paymentmethod`, `cardName`, `cardNumber`, `cardMonth`, `cardYear`, `cardCvv`,`amount`) VALUES ('$bookingId','$paymentmethod','$cardName','$cardNumber','$cardMonth','$cardYear','$cardCvv','$amount')";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                            $sql = "UPDATE roombook SET `status`='card' WHERE room_book_id = '$bookingId'";
                            $result1 = mysqli_query($conn, $sql);
                            if($result1)
                            {
                                echo "<script>alert('payment Successful');</script>";
								echo "<script>window.location.replace('http://localhost/dp/dp1/user_booking_history.php')</script>";
                            }
                            
                        }
                    }
                }
            ?>
          
