<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        .ul {
            width: 18%;
            font-size: 24px;
            background-color: #B4D4FF;
            text-decoration: none;
            position: fixed;
            height: 100%;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
        }
        .li {
            background-color: #B4D4FF;
            /* color: #3C5376; */
        }
        .li .a {
            display: block;
            color: #176B87;
            font-size: 22px;
            font-weight: 600;
            padding: 10px 20px;
            text-decoration: none;
        }

        .li .a:hover{
            background-color: #176B87;
            color: #B4D4FF;
        }

        .active{
            background-color: #176B87;
            color:#B4D4FF;
        }

        .li .a:after{
            content: "";
            display: block;
            margin: auto;
            width: 0px;
            height: 5px;
            background: #EEF5FF;
            transition: width 1s ease, background-color 1s ease;
        }

        .li .a:hover:after{
            width: 100%;
        }

        .ul-u{
            margin-top: 10%;
        }

        .nav-icon-img{
            width: 25px;
            height: 25px;
            /* top: 20px; */
            /* margin-right: 15px; */
        }

        .nav-icon-img-header{
            margin-top: 35px;
            margin-left: 40px;
            width: 150px;
            height: 150px;
            /* top: 20px; */
            /* margin-right: 15px; */
        }
    </style>
</head>
<body style="background-color:#EEF5FF;">
    <div>
       

        <div class="ul">
        <div>
            <img src="../image/hotels-logo.png" class="nav-icon-img-header">
        </div>
            <ul class="ul-u" >
                <li class="li" id="ul-u"><a class="a" href="user_profile.php" onmouseover="changeIcon(this, '../image/user (2).png')" onmouseout="changeIcon(this, '../image/user (1).png')">
                    <img src="../image/user (1).png" class="nav-icon-img">
                    My Info</a></li>
                <li class="li"><a class="a" href="reservation.php" onmouseover="changeIcon(this, '../image/booking (3).png')" onmouseout="changeIcon(this, '../image/booking.png')">
                    <img src="../image/booking.png" class="nav-icon-img">
                    Book a Room</a></li>
                <li class="li"><a class="a" href="user_payment.php" onmouseover="changeIcon(this, '../image/pay.png')" onmouseout="changeIcon(this, '../image/pay (1).png')">
                <img src="../image/pay (1).png" class="nav-icon-img">
                Payment</a></li>
                <li class="li"><a class="a" href="user_booking_history.php" onmouseover="changeIcon(this, '../image/history.png')" onmouseout="changeIcon(this, '../image/history (1).png')">
                <img src="../image/history (1).png" class="nav-icon-img">    
                Booking History</a></li>
                <li class="li"><a class="a" href="user_cancel_booking.php" onmouseover="changeIcon(this, '../image/cancel-booking (1).png')" onmouseout="changeIcon(this, '../image/cancel-booking.png')">
                <img src="../image/cancel-booking.png" class="nav-icon-img"> 
                Cancel Booking</a></li>
                <li class="li"><a class="a" href="index.php" onmouseover="changeIcon(this, '../image/power-off.png')" onmouseout="changeIcon(this, '../image/power-off (1).png')">
                <img src="../image/power-off (1).png" class="nav-icon-img">
                Logout</a></li>
            </ul>
        </div>
    </div>
    <script>
        function changeIcon(element, newIconSrc) {
            var img = element.querySelector('.nav-icon-img');
            img.src = newIconSrc;
        }

    </script>
</body>
</html>
