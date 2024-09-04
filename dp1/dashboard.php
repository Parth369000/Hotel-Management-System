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
			.main-con{
				display: flex;
			}

			.databox{
				width:100%;
				margin-left: 20%;
				height:100vh;
				display:grid;
				grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
				grid-gap:10px;
			}
			.box{
				border-radius:5px;
				width:300px;
				height:150px;
				margin-left:20px;
				display:flex;
				justify-content:center;
				align-items:center;
				margin-top:50px;
				background-color: #B4D4FF;
				color: #176B87;
			}
			.card{
				margin-bottom:190px;
				background-color:#B4D4FF;
				color:#176B87;
			}
			.cards{
				margin-top: 50px;
				width: 700px;
				display: grid;
				grid-template-columns: repeat(3,1fr); 
				grid-gap: 30px; 
				margin-left:300px;
			}
			.cards .card{
				
				padding: 20px;
				margin-bottom:50px;
				align-items: center;
				justify-content: space-between;
				box-shadow: 0 10px 20px rgba(0,0,0,0.7);
			}
			
			.number{
			   font-size: 35px;
			   font-weight: 500;
			 
			}
			
			.card-name{
				
				font-weight: 600;
			}
			.icon-box{
				font-size: 45px;
				
			}
			.card-content{
				
			}
	</style>
	</head>
	<?php
	
	$sql ="select * from customer";
	
	$result = mysqli_query($conn,$sql);
	
	if($result)
	{
		$rowCount = mysqli_num_rows($result);
	}
	?>
	<body>
		<div class="main-con">
			<div>
            <?php include 'admin_view.php';?>
			</div>
			<div class="cards">
        <div class="card">
            <div class="card-content">
                <div class="number"><?php echo $rowCount; ?></div>
                <div class="card-name">Total Customer</div>
            </div>
        </div>
		<?php
		$sql ="select * from roombook";
	
	$result = mysqli_query($conn,$sql);
	
	if($result)
	{
		$rowCount = mysqli_num_rows($result);
	}
	
	
	?>
        <div class="card">
            <div class="card-content">
                <div class="number"><?php echo $rowCount; ?></div>
                <div class="card-name">Total Booking</div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
			<?php
			$confirm_payment = 0;
		$sql ="select * from roombook";
	
	$result = mysqli_query($conn,$sql);
	
	if($result)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			if($row["status"] === "Confirm")
			{
			$confirm_payment = $confirm_payment + $row["total_price"];
			}
		}
		
	}
	
	?>
                <div class="number"><?php echo $confirm_payment; ?></div>
                <div class="card-name">Total Balance</div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
			<?php
			$pending_payment = 0;
		$sql ="select * from roombook";
	
	$result = mysqli_query($conn,$sql);
	
	if($result)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			if($row["status"] === "NotConfirm" || $row["status"] === "Card" || $row["status"] === "Cash")
			{
				$pending_payment = $pending_payment + $row["total_price"];
			}
		}
		
	}
	
	?>
                <div class="number"><?php echo $pending_payment; ?></div>
                <div class="card-name">Pending payment</div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
			<?php
		$sql ="select * from roombook where status='Cancel'";
	
	$result = mysqli_query($conn,$sql);
	
	if($result)
	{
		$rowCount = mysqli_num_rows($result);
	}
	
	
	?>
                <div class="number"><?php echo $rowCount; ?></div>
                <div class="card-name">Cancelled Booking</div>
            </div>
           
        </div>    
    </div>
		</div>
	</body>
</html>
