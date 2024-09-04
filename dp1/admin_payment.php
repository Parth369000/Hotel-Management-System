<?php

include 'config.php';
session_start();
?>

<html>
	<head>
		<title></title>
	<style>


            .basic_box {
                border: 1px solid gray;
                border-radius: 15px;
                margin: auto;
                width: 1050px;
                padding: 35px;
                box-shadow: 0 10px 20px rgba(0,0,0,0.5);
                margin-top:100px;
            }


            .manage-profile{
                margin-left: 20px;
                font-weight: bold;
                font-size: 36px;
                text-align: center; 
                text-decoration: underline;
                margin-bottom: 25px;
            }

            .history-header{
                font-size: 20px;
                
			}

            .profile{
                margin-left:85%;
                margin-top:10px;
            }
            
            .box-main{
                /* border:2px solid black; */
                width:100%;
				margin-left: 18%;
                /* position: relative; */
            } 

			.btn-add{
			font-size: 20px;
			border-radius: 8px;
			background-color: #176B87;
			color: #B4D4FF;
			font-weight: 700;
			padding: 6px 12px;
			text-decoration: none;
			box-shadow: none;
			border: none;
			cursor: pointer;
			margin-top: 20px;
			}

			.main{
				display: flex;
			}

			.img{
			width: 25px;
			height: 25px;
			margin-right: 5px;
			margin-left: 5px;
		}
		
			.empty-notfy{
		margin-top: 10px;
		
        font-weight: bold;
        font-size: 22px;
        text-align: center; 
        margin-bottom: 25px;    
		}
		
		.header{
			font-weight: bold;
		}
		
		.btn-update{
			text-decoration:none;
			color: #176B87;	
		}
	</style>
	</head>
	
	<body>

		<div class="main">	
			<div>
				<?php include 'admin_view.php'; ?>
			</div>
            <div class="box-main">
            <div class="profile">
			<!-- <button type="submit" class="btn-add" name="addroom"><a href="#" class="btn-add">Add customer</a></button> -->
		</div>
			<table class="basic_box" border="1" cellspacing="0" cellpadding="0" align="center">
				<tr align="center">
					<td colspan="7"><p class="manage-profile" style="font-family:'fantasy';">Manage Payment</p>
				</td>
				</tr>
				<tr align="center">
					<td class="history-header header">Payment ID</td>
					<td class="history-header header">Booking ID</td>
					<td class="history-header header">Check in</td>
					<td class="history-header header">Check out</td>
					<td class="history-header header">Payment method</td>
					<td class="history-header header">Amount</td>
					<td class="history-header header">Accept or Decline Payment</td>
				</tr>
				<tr>
				<?php
					$sql = "SELECT * FROM payment_details";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<tr align='center'>";
							$sql1 = "SELECT * FROM roombook where room_book_id = $row[booking_id]";
							$result1 = mysqli_query($conn, $sql1);
							$row1 = mysqli_fetch_assoc($result1);
							if($row1['status'] != 'Confirm'){
							echo "<td class='history-header'>" . $row["payment_id"] . "</td>";
							echo "<td class='history-header'>" . $row["booking_id"] . "</td>";
							echo "<td class='history-header'>" . $row1["check_in"] . "</td>";
							echo "<td class='history-header'>" . $row1["check_out"] . "</td>";
							echo "<td class='history-header'>" . $row["paymentmethod"] . "</td>";
							echo "<td class='history-header'>" . $row["amount"] . "</td>";
							echo "<td class='history-header'><a href='update_payment.php?payment_id=$row[payment_id]&booking_id=$row[booking_id]' class='btn-update'><img src='../image/tick-mark.png' class='img'></a></td>";
							echo "</tr>";
							}
						}
					}
					else
					{
						$empty = "Empty record";
						echo "<tr>";
						echo "<td colspan='7' align='center'><p  class='empty-notfy'>$empty</p></td>";
						echo "</td>";

					}
					?>
				</tr>
			</table>
            </div>
		</div>
	</body>
</html>
            
