<?php

include 'config.php';
session_start();
?>
<html>
	<head>
		<title></title>
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin-left: 22%;
		margin-top: 5%;
		width: 1000px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
			
			

			.rooms-box{
				width:100%;
				height:30px;
				/* border:2px solid black; */
				/* display:flex; */
				margin-left: 85%;
				/* margin-top: 5%; */
			}
			
			.btn-add{
    /* margin-top: -12px; */
			font-size: 18px;
			border-radius: 8px;
			background-color: #176B87;
			color: #B4D4FF;
			font-weight: 700;
			/* width: 100px; */
			padding: 6px 12px;
			text-decoration: none;
			box-shadow: none;
			border: none;
			cursor: pointer;
			margin-top: 20px;
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
        font-weight: bold;
        font-size: 36px;
        text-align: center; 
        text-decoration: underline;
        margin-bottom: 25px;
    }

    .history-header{
        margin-right: 15px;
        font-size: 20px;
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
        margin-left: 150px;
        font-weight: bold;
        font-size: 22px;
        text-align: center; 
        margin-bottom: 25px;    
	}
	.img{
		width: 25px;
        height: 25px;
		margin-right: 5px;
		margin-left: 5px;
	}
		

	</style>
	</head>
	
	<body>
<div class="room_con">
		<div>
			<?php include 'admin_view.php';?>
		</div>
			<div class="rooms-box">
			<button type="submit" class="btn-add" name="addroom"><a href="add_rooms1.php" class="btn-add">Add Room </a></button>
			</div>
			<div>
			<table class="basic_box" border="1" cellpadding="0" cellspacing="0" align="center">
				<tr >
					<td colspan="7"><p class="booking-history" style="font-family:'fantasy';">Rooms</p>
				</td>
				<tr align="center">
					<td class="history-header header">Room ID</td>
					<td class="history-header header">Room Type</td>
					<td class="history-header header">Price</td>
					<td class="history-header header">Status</td>
                    <td class="history-header header">Action</td>
				</tr>
				<tr >
				<?php
					$sql = "SELECT * FROM room";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<tr align='center'>";
							echo "<td class='history-header'>" . $row["room_id"] . "</td>";
							echo "<td class='history-header'>" . $row["roomType"] . "</td>";
							echo "<td class='history-header'>" . $row["price"] . "</td>";
							echo "<td class='history-header'>" . $row["status"] . "</td>";
							echo "<td class='history-header'><a href='update_room.php?room_id=$row[room_id] & roomType=$row[roomType] & price=$row[price] & status=$row[status]'><img class='img' src='../image/editing.png'></a> <a href='delete_room.php?room_id=$row[room_id]'><img class='img' src='../image/bin.png'></a></td>";
							echo "</tr>";
						}
					}
					else
					{
						$empty = "Empty record";
						echo "<tr>";
						echo "<td colspan='6'><p  class='empty-notfy'>$empty</p></td>";
						echo "</td>";

					}
					?>
				</tr>
			</table><br><br>
		</div>
	</body>
</html>
