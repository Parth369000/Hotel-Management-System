<?php
// error_reporting(E_ALL);  // Enable error reporting for debugging

include 'config.php';
session_start();

// echo $room_book_id;
$date1 = urldecode($_GET['check_in']);
$date2 = urldecode($_GET['check_out']);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            * {
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
                /* text-shadow: var(--bg-text-shadow);  */
            }

            #guestdetailpanel .guestdetailpanelform{
                height: 540px;
                width: 1070px;
                /* margin-top: 4%; */
                margin-left: 150px;  
                background-color: #EEF5FF;
                border-radius: 25px;
                z-index: 1000;
                
                /* position: fixed; */
				box-shadow: 0pc 10px 20px rgba(0,0,0,0.7);
				transition: transform 0.5s ease-in-out;
            }
			
			#guestdetailpanel .guestdetailpanelform:hover{
				transform: scale(1.02);	
			}

            .container{
                margin-top: 2%;
                margin-left: 2.5%;
                width: 95%;
                height: 100%;
            }
            .head {
                display: flex;
                margin-bottom: 25px;
            }

            .header{
                color: #176B87;
                font-size: 35px;
                margin-top: 22px;
                margin-left: 14%;
                text-align: center;
            }

            .closep{
                margin-top: 18px;
                font-size: 22px;
                font-weight: bold;
                border: none;
                background-color:#ccdff4 ;
                color: black;
                text-decoration: none;
                margin-left: 40%;
            }

            #guestdetailpanel .middle {
                margin-top: 1%;
                height: 450px;
            }

            .guestdetailpanelform .middle {
                width: 100%;
                height: 500px;
                margin: 10px 0 0 0;
                display: flex;
            }
            .guestdetailpanelform .middle .guestinfo {
                width: 100%;
                background-color: #EEF5FF;
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .middle input, .selectinput {
                width: 100%;
                border: none;
                color: #176B87;
                background-color: #b4d4ff47;
                padding: 10px;
                margin: 10px 0;
                border-radius: 20px;
            }
            select {
                word-wrap: normal;
            }
            button, select {
                text-transform: none;
            }
            button, input, optgroup, select, textarea {
                
                margin: 0;
                font-family: inherit;
                font-size: inherit;
                line-height: inherit;
            }
            .line {
                width: 10px;
                height: 100%;
            }
            .guestdetailpanelform .middle .reservationinfo {
                width: 100%;
                background-color: #EEF5FF;
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            *, ::after, ::before {
                box-sizing: border-box;
            }
            .middle input{
                width: 100%;
                border: none;
                background-color: #b4d4ff47;
                padding: 10px;
                margin: 10px;
                border-radius:0px;
				border: 1px solid #176B87;
            }

            .selectinput {
                border: 1px solid #176B87;
                width: 100%;
                background-color: #b4d4ff47;
                padding: 8px;
                margin: 16px;
                border-radius:0px;
            }

            select {
                word-wrap: normal;
            }
            button, select {
                text-transform: none;
            }
            button, input, select {
                height: 40px;
                text-align: center;
                color: #176B87;
                font-family: inherit;
                font-size: inherit;
                line-height: inherit;
            }
            .datesection {
                display: flex;
            }

            .guestdetailpanelform .footer {
                height: 50px;
                display: flex;
                justify-content: center;
                margin: 10px;
            }

            .both{
                display: flex;
            }

            .c-in-out{
                margin-left: 5px;
                margin-right: 15px;
            }
            .cin,.cout{
                margin-left: 10px;
            }

            .tags{
                margin-bottom: 15px;
                font-size: 25px;
                color: #176B87;
            }

            ::placeholder{
                text-align: center;
                color:#176B87;
            }

            .image-li{
                color:#3c5376;
                font-family: sans-serif;
                margin-left: 18%;
                font-size: 18px;
				list-style-type:none;
            }
            .image{
                
                padding-top: 5px;
                margin-right: 5px;
                width: 13%;
                height: 10%;
            }

            .single{
                display:none;
            }

            .guest{
                display:none;
            }

            .deluxe{
                display:none;
            }

            .superior{
                display:none;
            }

            .room-details{
                display: flex;
            }
			
			.btn-submit{
			margin-top:-15px;
			border-radius:20px;
			width:20%;
			color: #176B87;
			border-color: #176B87;
			font-size:20px;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}

		.btn-submit:hover{
				color:#EEF5FF;;
				background-color:#176B87;
		}
    </style>
</head>
<body>
    <div class="both">
    <div id="guestdetailpanel">
	<h2 class="header" style="font-family:'fantasy';">RESERVATION</h2>
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="container">
                <div class="head">
                    
                    <!-- <button type="button" class="closep" onclick="clOsef()">X</button> -->
                </div>
                <div class="middle">
                    <div class="guestinfo">
                        <h4 class="tags">Guest information</h4>
                        <input type="text" name="Name" placeholder="Enter Full name" value="<?php echo $_GET['name']; 
                        $room_book_id = $_GET['room_book_id'];
                        $_SESSION['room_book_id'] = $room_book_id;
                        ?>" required><br>
                        <input type="email" name="Email" placeholder="Enter Email" value="<?php echo $_GET['email']; ?>" style="color: #176B87;" readonly><br>
                        <input type="tel" name="Phone" value="<?php echo $_GET['phone_no']; ?>" placeholder="Enter Phone no " pattern="[0-9]{3}[0-9]{3}[0-9]{4}" oninvalid="this.setCustomValidity('Phone number must be 10 digit')" oninput="this.setCustomValidity('')" required><br>
                    </div>
        
                    <div class="line"></div>
        
                    <div class="reservationinfo">
                        <h4 class="tags">Reservation information</h4>
                        <!-- <select name="RoomType" id="roomType" class="selectinput" required>
                        <option value="not" selected>Type Of Room</option>
                        <option value="Single Room" class="sing_room">SINGLE ROOM</option>
                        <option value="Guest House" class="guest_room">GUEST HOUSE</option>
                        <option value="Deluxe Room">DELUXE ROOM</option>
                        <option value="Superior Room">SUPERIOR ROOM</option>
    </select> -->

    <?php
// Static options
            $staticOptions = [
                
                "Single Room" => "Single Room",
                "Guest Room" => "Guest Room",
                "Deluxe Room" => "Deluxe Room",
                "Superior Room" => "Superior Room"
            ];
            $email = $_GET['email'];
            // Query to fetch dynamic options from the database
            $sql = "SELECT room_type FROM roombook where email='$email'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $roomType =  $row['room_type'];
                // echo $roomType;
                echo "<select name='RoomType' id='roomType' class='selectinput' required>";
            
            // Append static options
            foreach ($staticOptions as $value => $text) {
                // Check if the value already exists in dynamic options
                if ($text === $roomType) {
                    echo "<option value='$roomType' selected>$roomType</option>";
                }
                else
                {
                    echo "<option value='$value'>$value</option>";
                }
                
            }

            echo "</select>";
        } else {
            echo "No room type found in the database.";
        }
        ?>

    <div class="room-features">
        <div class="room-details">
            <ul class="image-ul single">
                <li class="image-li"><img src="../image/wi-fi (2).png" class="image">Wifi </li>
                <li class="image-li"><img src="../image/phone-call.png" class="image">Telephone </li>
            </ul>
            <ul class="image-ul single">
                <li class="image-li"><img src="../image/single-bed.png" class="image"> Single bed </li>
            </ul>

            <ul class="image-ul guest">
                <li class="image-li"><img src="../image/wi-fi (2).png" class="image"> Wifi </li>
                <li class="image-li"><img src="../image/phone-call.png" class="image"> Telephone </li>
            </ul>
            <ul class="image-ul guest">
                <li class="image-li"><img src="../image/single-bed.png" class="image"> Single bed </li>
                <li class="image-li"><img src="../image/double-bed.png" class="image"> Double bed </li>
            </ul>
            
            <ul class="image-ul deluxe">
                <li class="image-li"><img src="../image/wi-fi (2).png" class="image"> Wifi </li>
                <li class="image-li"><img src="../image/phone-call.png" class="image"> Telephone </li>
            </ul>
            <ul class="image-ul deluxe">
                <li class="image-li"><img src="../image/queen-bed (5).png" class="image"> Master bed </li>
                <li class="image-li"><img src="../image/tv-monitor (2).png" class="image"> Smart tv </li>
                
            </ul>
            <ul class="image-ul superior">
                <li class="image-li"><img src="../image/wi-fi (2).png" class="image"> Wifi </li>
                <li class="image-li"><img src="../image/phone-call.png" class="image"> Telephone </li>
            </ul>
            <ul class="image-ul superior">
                <li class="image-li"><img src="../image/queen-bed (5).png" class="image"> Master bed </li>
                <li class="image-li"><img src="../image/tv-monitor (2).png" class="image"> Smart tv </li>
            </ul>
            <ul class="image-ul superior">
                <li class="image-li"><img src="../image/coolnes.png" class="image"> Refrigerator </li>
                <li class="image-li"><img src="../image/bath-tub (2).png" class="image"> Bathtub </li>
            </ul>
        </div>
    </div>
                                        
                        <!-- <select name="NoofRoom" class="selectinput" required>
                            <option selected >No of Room</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option> 
                        </select> -->
<?php
// Static options
            $staticOptions = [
                "No of room" => "No of room",
                "1" => "1",
                "2" => "2",
                "3" => "3"
            ];
$email = $_GET['email'];
// echo $email;
            // Query to fetch dynamic options from the database
            $sql = "SELECT no_of_room FROM roombook WHERE email = '$email'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $noOfRoom =  $row['no_of_room'];
                 echo "<select name='NoofRoom' class='selectinput' required>";
            
            // Append static options
            foreach ($staticOptions as $value => $text) {
                // Check if the value already exists in dynamic options
                if ($text === $noOfRoom) {
                    echo "<option value='$noOfRoom' selected>$noOfRoom</option>";
                }
                else
                {
                    echo "<option value='$value'>$value</option>";
                }
                
            }
            echo "</select>";
        } else {
            echo "No room numbers found in the database.";
         }
        ?>

                        
                        <?php
// Static options
            $staticOptions = [
                "Ac/NonAc" => "Ac/NonAc",
                "Ac" => "Ac",
                "NonAc" => "NonAc"
            ];
$email = $_GET['email'];
// echo $email;
            // Query to fetch dynamic options from the database
            $sql = "SELECT ac_type FROM roombook WHERE email = '$email'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $acType =  $row['ac_type'];
                 echo "<select name='ac_type' class='selectinput' required>";
            
            // Append static options
            foreach ($staticOptions as $value => $text) {
                // Check if the value already exists in dynamic options
                if ($text === $acType) {
                    echo "<option value='$acType' selected>$acType</option>";
                }
                else
                {
                    echo "<option value='$value'>$value</option>";
                }
                
            }
            echo "</select>";
        } else {
            echo "No room numbers found in the database.";
         }
        ?>

                        <div class="datesection">
                            <span class="c-in-out">
                                <label for="cin" class="cin"> Check-In</label>
                                <input name="cin" type ="date" id="cin"  value="<?php echo $date1; ?>">
                                <script>
                                    var cinField = document.getElementById('cin');
                                    cinField.addEventListener('change', function () {
                                        var selectedDate = new Date(this.value);
                                        var today = new Date();
                                        if (selectedDate < today) {
                                            alert('Please select a future date.');
                                            this.value = today.toISOString().split('T')[0];
                                        }
                                    });
                                </script>
                            </span>
                            <span class="c-in-out">
                                <label for="cin" class="cout"> Check-Out</label>
                                <input name="cout" type ="date" id="cout"  value="<?php echo $date2; ?>" required>
                                <script>
                                    var coutField = document.getElementById('cout');
                                    coutField.addEventListener('change', function () {
                                        var selectedDate = new Date(this.value);
                                        var today = new Date();
                                        if (selectedDate < today) {
                                            alert('Please select a future date.');
                                            this.value = today.toISOString().split('T')[0];
                                        }
                                    });
                                </script>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <input type="submit" class="btn-submit" name="guestdetailsubmit">
                </div>
            </div>
        </form>   
        <!-- ==== room book php ====-->
           <?php
            if (isset($_POST['guestdetailsubmit'])) {
                $room_book_id = $_SESSION['room_book_id'];
                $Name = $_POST['Name'];
                $Phone = $_POST['Phone'];
                $RoomType = $_POST['RoomType'];
                $ac_type = $_POST['ac_type'];
                $NoofRoom = $_POST['NoofRoom'];
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];

                if($Name == ""){
                    echo "<script>alert('Fill the proper details');
                    </script>";
                }
                else{
                    if($RoomType == "Single Room")
                    {
                        $price = 500;
                    }
                    elseif ($RoomType == "Guest House")
                    {
                        $price = 700;
                    }
                    elseif ($RoomType == "Deluxe Room")
                    {
                        $price = 1000;
                    }
                    else
                    {
                        $price = 1500;
                    }

                    $sta = "NotConfirm";
                    
                    $Days = abs(strtotime($cout) - strtotime($cin));
                    $Days = floor($Days / (60*60*24));
                    $NoofDays = (strtotime($cout) - strtotime($cin)) / (60 * 60 * 24);
                    $total_price = $price * $Days * $NoofRoom;
                    $sql = "UPDATE `roombook` SET `name`='$Name',`phone_no`='$Phone',`room_type`='$RoomType',`ac_type`='$ac_type',`no_of_room`='$NoofRoom',`check_in`='$cin',`check_out`='$cout',`no_of_days`='$NoofDays',`total_price`='$total_price' WHERE room_book_id='$room_book_id'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo '<script>window.location.href = "admin_booking_history.php";</script>';
                        exit();
                    } else {
                        echo "<script>alert('Query execution error: " . mysqli_error($conn) . "');</script>";
                    }

                }
            }
      ?>        
    </div>
    </div>

        <script>
                document.getElementById('roomType').addEventListener('change', function () {
            // Get the selected value
            var selectedValue = this.value;

            // Get the elements with the 'single' and 'guest' classes
            var singleElements = document.querySelectorAll('.single');
            var guestElements = document.querySelectorAll('.guest');
            var deluxeElements = document.querySelectorAll('.deluxe');
            var superiorElements = document.querySelectorAll('.superior');

            // Loop through the elements and update the display property based on the selected value
            for (var i = 0; i < singleElements.length; i++) {
                singleElements[i].style.display = (selectedValue === 'Single Room') ? 'block' : 'none';
            }

            for (var i = 0; i < guestElements.length; i++) {
                guestElements[i].style.display = (selectedValue === 'Guest Room') ? 'block' : 'none';
            }

            for (var i = 0; i < deluxeElements.length; i++) {
                deluxeElements[i].style.display = (selectedValue === 'Deluxe Room') ? 'block' : 'none';
            }

            for (var i = 0; i < superiorElements.length; i++) {
                superiorElements[i].style.display = (selectedValue === 'Superior Room') ? 'block' : 'none';
            }
        });
        </script>
</body>
</html>
