<?php

include 'config.php';
session_start();
?>
<html>
	<head>
		<title></title>
	<style>
			

			.rooms-box{
				width:80%;
				height:729px;
				padding-left: 10px;
				margin-left: 18%;				
			}
			
			.ad-db{
				display:flex;
			}
			
			.btn-add{
			font-size: 18px;
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

			.searchsection{
				margin-left: 82%;
			}

			.basic_box {
                border: 1px solid gray;
                border-radius: 15px;
                margin-left: 10px;
                width: 1800px;
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
				padding: 30px;
            }

			.history-header{
        /* margin-right: 15px; */
		padding: 5px;
        font-size: 18px;
    }

	.img{
			width: 25px;
			height: 25px;
			margin-right: 5px;
			margin-left: 5px;
		}
		
		.btn-update{
			text-decoration:none;
			color: #176B87;
			
		}
	</style>
	</head>
	
	<body>

		<div class="ad-db">
			<div>
				<?php include 'admin_view.php'; ?>
			</div>
			<div class="rooms-box">
			<div class="searchsection">
			<button type="submit" class="btn-add" name="addroom"><a href="admin_reservation.php" class="btn-add">Book Room</a></button>
		</div>
				
			<div class="room-box">
                	<table class="basic_box" id="table-data" border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td colspan="15" class="manage-profile" style="font-family:'fantasy';">Booking history</td>
						</td>
						</tr>
                        <tr>
                            <th scope="col">Booking Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone no</th>
                            <th scope="col">Type of Room</th>
                            <th scope="col">Ac / NonAc</th>
                            <th scope="col">No of Room</th>
                            <th scope="col">Check-In</th>
                            <th scope="col">Check-Out</th>
                            <th scope="col">No of Night</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="action">Action</th>
                        </tr>
						<tr>
						<?php
					$sql = "SELECT * FROM roombook";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<tr align='center'>";
							echo "<td class='history-header'>" . $row["room_book_id"] . "</td>";
							echo "<td class='history-header'>" . $row["name"] . "</td>";
							echo "<td class='history-header'>" . $row["email"] . "</td>";
							echo "<td class='history-header'>" . $row["phone_no"] . "</td>";
							echo "<td class='history-header'>" . $row["room_type"] . "</td>";

							echo "<td class='history-header'>" . $row["ac_type"] . "</td>";
							echo "<td class='history-header'>" . $row["no_of_room"] . "</td>";
							echo "<td class='history-header'>" . $row["check_in"] . "</td>";
							$encodedDate = urlencode($row['check_in']);
							echo "<td class='history-header'>" . $row["check_out"] . "</td>";
							$encodedDate1 = urlencode($row['check_out']);
							echo "<td class='history-header'>" . $row["no_of_days"] . "</td>";
							echo "<td class='history-header'>" . $row["total_price"] . "</td>";
							echo "<td class='history-header'>" . $row["status"] . "</td>";
							echo "<td class='history-header'><a class='btn-update' href='update_booking.php?check_in=$encodedDate&check_out=$encodedDate1&room_book_id=$row[room_book_id]&name=$row[name]&email=$row[email]&phone_no=$row[phone_no]&room_type=$row[room_type]&ac_type=$row[ac_type]&no_of_room=$row[no_of_room]'><img src='../image/editing.png' class='img'></a>
							<a href='delete_booking.php?room_book_id=$row[room_book_id]' class='btn-update'><img src='../image/bin.png' class='img'></a></td>";
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
                	</table>
            	</div>   
			</div>
		</div>
	</body>
</html>
