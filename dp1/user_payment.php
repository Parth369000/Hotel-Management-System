<?php
include 'config.php';
session_start();
/*if(isset($_POST['btn_payment'])) {
	
    $booking_id = $_POST['booking_id'];
	$_SESSION['booking_id']=$booking_id;
	header("Location: user_payment_confirm.php");
    exit(); // Add exit to stop further execution
}
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .basic_box {
		border-radius: 25px;
		width: 980px;
		padding: 60px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.7);
		background-color: #EEF5FF;
		border:none;
		margin-top: 60px;
	}

    .tag{
        margin-left: 15px;
        font-weight: bold;
        font-size: 20px;
		
    }

    .booking-history{
        margin-left: 20px;
        font-weight: bold;
        font-size: 36px;
        text-align: center; 
        text-decoration: underline;
        margin-bottom: 25px;
		color: #176B87;
    }

    .history-header{
        font-size: 20px;
		color: #176B87;
    }

	.header{
		font-weight: bold;
	}


input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=number] {
    -moz-appearance:textfield;
}

.empty-notfy{
		margin-top: 10px;
		color: #34495e;
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
		
	.main_class1{
		margin-left:300px;
		padding:1px 16px;
		height:1000px;
	}
    </style>
</head>
<body >
    <div >
		<div>
            <?php include 'user_view.php';?>
        </div>
    <div class="main_class1" >
	<?php
					$usermail = $_SESSION['usermail'];
					$sql = "SELECT * FROM roombook WHERE email = '$usermail' and status='NotConfirm'";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) { ?>
			<table  class="basic_box">
				<tr>
					<td colspan="7"><p class="booking-history">Payment</p>
				</td>
				<tr align="center">
					<td class="history-header header">Booking ID</td>
					<td class="history-header header">Name</td>
					<td class="history-header header">Room Type</td>
					<td class="history-header header">Check-in Date</td>
					<td class="history-header header">Check-out Date</td>
					<td class="history-header header">Price</td>
					<td class="history-header header">Confirm Payment</td>
				</tr>
				<tr>
					<?php
						while($row = mysqli_fetch_assoc($result)) {
							if($row["status"] === 'NotConfirm'){
							echo "<tr align='center'>";
							echo "<td class='history-header'>" . $row["room_book_id"] . "</td>";
							echo "<td class='history-header'>" . $row["name"] . "</td>";
							echo "<td class='history-header'>" . $row["room_type"] . "</td>";
							echo "<td class='history-header'>" . $row["check_in"] . "</td>";
							echo "<td class='history-header'>" . $row["check_out"] . "</td>";
							echo "<td class='history-header'>" . $row["total_price"] . "</td>";
							echo "<td class='history-header'><a href='user_payment_confirm.php?room_book_id=$row[room_book_id]' class='btn-confirm'>Pay now</a></td>";
							echo "</tr>";
							}
						}
						?>
						<!-- <table class="basic_box">
						<tr>
						<td colspan="1" class="tag">Enter Booking ID:</td>
						<td colspan="2">
						<form action="user_payment_confirm.php" method="post">
							<input type="number" name="booking_id" class="booking_id" id="booking_id" required>
						</td>
						<td><button type="submit" class="btn-submit" name="btn_payment">Pay now</button></td>
						</tr>
						</form>	
						</table> -->

						<?php
					}
					else
					{
						$empty = "Empty record";
						echo "<tr>";
						echo "<td colspan='7'><p  class='empty-notfy'>$empty</p></td>";
						echo "</td>";

					}
					?>
				</tr>
			</table><br><br>
			
			</div>
    </div>
</body>
</html>