<?php

include 'config.php';
session_start();
     
        if (isset($_POST['add_customer'])) {
                    $name = $_POST['name'];
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];
                    $CPassword = $_POST['CPassword'];
					$mobno = $_POST['mobno'];

                        if ($Password == $CPassword) {
                            $sql = "SELECT * FROM customer WHERE Email = '$Email'";
                            $result = mysqli_query($conn, $sql);
    
                            if ($result->num_rows > 0) {
                                echo "<script>alert('Email already exits');</script>";
								echo "<script>window.location.replace('http://localhost/dp/dp1/add_profile.php')</script>";
                                
                            } 
							else {
                                $sql = "INSERT INTO customer (name,Email,password,mobileno) VALUES ('$name', '$Email', '$Password','$mobno')";
                                $result = mysqli_query($conn, $sql);
    
                                if ($result) {
                                    $_SESSION['usermail']=$Email;
                                    $name = "";
                                    $Email = "";
                                    $Password = "";
                                    $CPassword = "";
									$mobno = "";
									echo "<script>alert('User profile add successful');</script>";
                                    header("Location: manage_profile.php");
                                } else {
                                    echo "<script>alert('Something went wrong');
                                    </script>";
                                }
                            }
                        } else {
                            echo "<script>('Password does not matched');
                            </script>";
                        }
                    
                }
            ?>