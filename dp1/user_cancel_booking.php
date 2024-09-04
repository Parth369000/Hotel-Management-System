<?php
error_reporting(0);
include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .basic_box {
		border: 1px solid #ccc;
		border-radius: 25px;
		width: 980px;
		padding: 40px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.7);
		margin-top: 60px;
	}
	
    .btn-submit{
        background-color: #080830;
        color: #ffffff;
        font-weight: bold;
        width: 180px;
        font-size: 18px;
        height: 30px;
        border: none;
        border-radius: 5px;
    }

    .tag{
        margin-left: 5px;
        font-weight: bold;
        font-size: 20px;
    }

    .booking-history{
		color: #176B87;
        font-weight: bold;
        font-size: 36px;
        text-align: center; 
        text-decoration: underline;
        margin-bottom: 25px;
		margin-top: 30px;
    }

    .history-header{
		color: #176B87;
        font-size: 20px;
    }

	.header{
		
		font-weight: bold;
	}

    /*.booking_id {
        border-radius: 5px;
        height: 30px;
        width: 350px;
    }*/

    .empty-notfy{
		margin-top: 10px;
		color: #34495e;
        margin-left: 20px;
        font-weight: bold;
        font-size: 22px;
        text-align: center; 
        margin-bottom: 25px;    
	}
.btn-confirm{
		text-decoration: none;
		color: #3c5376;
		font-weight:600;
		border-radius: 15px;
		}
		.main_class2{
			margin-left:320px;
			padding:1px;
			height:1000px;
		}
    </style>
</head>
<body>
    <div>
    <div>
            <?php include 'user_view.php';?>
        </div>
    <div class="main_class2" >
		
			<table class="basic_box" >
				<tr>
					<td colspan="8"><p class="booking-history">Cancel Booking</p>
				</td>
				<tr align="center">
					<td class="history-header header">Booking ID</td>
					<td class="history-header header">Name</td>
					<!--<td class="history-header header">Room Type</td> -->
					<td class="history-header header">Check-in Date</td>
					<td class="history-header header">Check-out Date</td>
					<td class="history-header header">Price</td>
                    <td class="history-header header">Payment status</td>
					<td class="history-header header">Cancel booking</td>
				</tr>
				<tr>
				<?php
					$usermail = $_SESSION['usermail'];
					$sql = "SELECT * FROM roombook WHERE email = '$usermail'";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<tr align='center'>";
							echo "<td class='history-header'>" . $row["room_book_id"] . "</td>";
							echo "<td class='history-header'>" . $row["name"] . "</td>";
							//echo "<td class='history-header'>" . $row["room_type"] . "</td>";
							echo "<td class='history-header'>" . $row["check_in"] . "</td>";
							echo "<td class='history-header'>" . $row["check_out"] . "</td>";
							echo "<td class='history-header'>" . $row["total_price"] . "</td>";
							echo "<td class='history-header'>" . $row["status"] . "</td>";
							echo "<td class='history-header'><a href='user_cancel_booking_success.php?room_book_id=$row[room_book_id]' class='btn-confirm' name='user_cancel_booking' >Cancel</a></td>";
							echo "</tr>";
						}
					}
                    else
					{
						$empty = "Empty record";
						echo "<tr>";
						echo "<td colspan='8'><p  class='empty-notfy'>$empty</p></td>";
						echo "</td>";

					}
					?>
				</tr>
			</table><br><br>
			
	</div>
    </div>
</body>
</html>