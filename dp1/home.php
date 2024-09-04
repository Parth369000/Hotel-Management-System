<html>
	<head>
		<title>Home</title>
		<style>
			*{
				margin:0;
				padding:0;
			}
			.navbox{
				height: 100%;
				width: 250px;
				background-color: navy;
			}
			.nav-list{
				margin-left: 10px;
				margin-top:60px;
				color: white;
				text-decoration : none;
				font-size : 25px;
			}
			
			.navbox li{
				padding-top: 20px;
			}
			.nav-list ::hover{
				background-color:white;
				color: navy;
			}
		</style>
	</head>
	<body>
		<nav>
			<ul class = "navbox">
				<li><a href="#" class="nav-list">Book a room</a></li>
				<li><a href="#" class="nav-list">Payment</a></li>
				<li><a href="#" class="nav-list">Booking history</a></li>
				<li><a href="#" class="nav-list">Cancel Booking</a></li>
				<li><a href="login.php" class="nav-list">Logout</a></li>				
			</ul>
		</nav>
	</body>
</html>