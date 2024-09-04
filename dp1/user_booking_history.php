<?php

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
		border-radius: 15px;
		width: 980px;
		padding: 60px;
		box-shadow: 0 20px 20px rgba(0,0,0,0.7);
		margin-top: 60px;
	}
	

    .btn-submit{
        background-color: #080830;
        color: #ffffff;
        font-weight: bold;
        width: 100px;
        font-size: 15px;
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
        margin-left: 5%;
        font-weight: bold;
        font-size: 36px;
        text-align: center; 
        text-decoration: underline;
        margin-bottom: 25px;
		color: #176B87;
    }

    .history-header{
        margin-right: 15px;
        font-size: 20px;
		color: #176B87;
    }

	.header{
		font-weight: bold;
	}

    .booking_id {
        border-radius: 5px;
        height: 30px;
        width: 350px;
    }
	.empty-notfy{
		margin-top: 10px;
		color: #34495e;
        margin-left: 20px;
        font-weight: bold;
        font-size: 22px;
        text-align: center; 
        margin-bottom: 25px;    
	}
	
	.main_class{
		margin-left:299px;
		padding:1px 16px;
		height:900px;
		top: 50px;
	}
	
    </style>
</head>
<body>
    <div>
    <div>
            <?php include 'user_view.php';?>
        </div>
    <div class="main_class" >
			<table class="basic_box" >
				<tr align="center">
					<td colspan="8"><p class="booking-history">Booking History</p>
				</td>
				<tr align="center">
					<td class="history-header header">Booking ID</td>
					<td class="history-header header">Name</td>
					<td class="history-header header">Room Type</td>
					<td class="history-header header">Check-in Date</td>
					<td class="history-header header">Check-out Date</td>
					<td class="history-header header">Price</td>
                    <td class="history-header header">status</td>
				</tr>
				<tr>
				<?php
					$usermail = $_SESSION['usermail'];
					$sql = "SELECT * FROM roombook WHERE email = '$usermail'";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							//$amount = $row["total_price"] - 500;
							echo "<tr align='center'>";
							echo "<td class='history-header'>" . $row["room_book_id"] . "</td>";
							echo "<td class='history-header'>" . $row["name"] . "</td>";
							echo "<td class='history-header'>" . $row["room_type"] . "</td>";
							echo "<td class='history-header'>" . $row["check_in"] . "</td>";
							echo "<td class='history-header'>" . $row["check_out"] . "</td>";
							echo "<td class='history-header'>" . $row["total_price"] . "</td>";
							echo "<td class='history-header'>" . $row["status"] . "</td>";	
							echo "</tr>";
						}
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
			<!-- <table class="basic_box">
				<tr>
					<td colspan="1" class="tag">Enter Booking ID:</td>
					<td colspan="2">
						<form action="user_room_history.php" method="post">
							<input type="number" name="book_id" class="booking_id">
					</td>
					<td><button type="submit" class="btn-submit">View Details</button></td>
				</tr>
				<tr>
                    <td>
                    </td>
                </form>	
				</tr>
			</table> -->
	</div>
    </div>
</body>
</html>
