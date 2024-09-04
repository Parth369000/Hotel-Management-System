<?php

include 'config.php';
session_start();
?>

<html>
	<head>
		<title></title>
	<style>


            .basic_box {
                
                border-radius: 15px;
                margin: auto;
                width: 950px;
                padding: 35px;
                box-shadow: 0 10px 20px rgba(0,0,0,0.7);
                margin-top:100px;
				border: none;
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
                margin-left:82%;
                margin-top:10px;
            }
            
            .box-main{
                /* border:2px solid black; */
                width:100%;
				margin-left: 15%;
                /* position: relative; */
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

			.main{
				display: flex;
			}

			.img{
			width: 25px;
			height: 25px;
			margin-right: 5px;
			margin-left: 5px;
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
			<button type="submit" class="btn-add" name="addroom"><a href="add_profile.php" class="btn-add">Add customer</a></button>
		</div>
			<table class="basic_box" border="1" cellspacing="0" cellpadding="0" align="center">
				<tr align="center">
					<td colspan="6"><p class="manage-profile" style="font-family:'fantasy';">Manage Profile</p>
				</td>
				</tr>
				<tr align="center">
					<td class="history-header header">Customer ID</td>
					<td class="history-header header">Name</td>
					<td class="history-header header">Email</td>
					<td class="history-header header">Password</td>
					<td class="history-header header">Mobile no</td>
					<td class="history-header header">Modify Profile</td>
				</tr>
				<tr>
				<?php
					$sql = "SELECT * FROM customer";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<tr align='center'>";
							echo "<td class='history-header'>" . $row["cust_id"] . "</td>";
							echo "<td class='history-header'>" . $row["name"] . "</td>";
							echo "<td class='history-header'>" . $row["Email"] . "</td>";
							echo "<td class='history-header'>" . $row["password"] . "</td>";
							echo "<td class='history-header'>" . $row["mobileno"] . "</td>";
							echo "<td class='history-header'><a href='update_profile.php?cust_id=$row[cust_id] & name=$row[name] & Email=$row[Email] & Password=$row[password] & mobno=$row[mobileno] ' class='btn-update'><img src='../image/editing.png' class='img'></a> <a class='btn-update' href='delete_profile.php?cust_id=$row[cust_id]'><img src='../image/bin.png' class='img'></a></td>";
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
	</body>
</html>
