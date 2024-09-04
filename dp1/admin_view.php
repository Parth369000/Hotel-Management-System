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
        }
        .li {
            background-color: #B4D4FF;
            color: #176B87;
        }
        .li .a {
            display: block;
            color: #176B87;
            font-size: 20px;
            font-weight: 600;
            padding: 10px 20px;
            text-decoration: none;
        }

        .li .a:hover,.active{
            background-color: #176B87;
            color: #B4D4FF;
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
            margin-top: 25%;
        }

        .nav-admin-logo{
            width:25px;
            height: 25px;
        }

        .nav-icon-img-header{
            margin-top: 35px;
            margin-left: 55px;
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body  style="background-color:#EEF5FF;">
    <div>
        <div class="ul">
            <div>
                <img src="../image/hotels-logo.png" class="nav-icon-img-header">
            </div>
            <ul class="ul-u" id="act">
                <li class="li"><a class="a" href="dashboard.php" onmouseover="changeIcon(this, '../image/home (1).png')" onmouseout="changeIcon(this, '../image/home.png')">
                    <img src="../image/home.png" class="nav-admin-logo">    
                    Dashboard</a></li>
                <li class="li"><a class="a" href="manage_profile.php" onmouseover="changeIcon(this, '../image/user-avatar (1).png')" onmouseout="changeIcon(this, '../image/user-avatar.png')">
                    <img src="../image/user-avatar.png" class="nav-admin-logo">    
                    Manage profile</a></li>
                <li class="li"><a class="a" href="admin_booking_history.php" onmouseover="changeIcon(this, '../image/history.png')" onmouseout="changeIcon(this, '../image/history (1).png')">
                    <img src="../image/history (1).png" class="nav-admin-logo">    
                    Booking history</a></li>
                <li class="li"><a class="a" href="admin_payment.php" onmouseover="changeIcon(this, '../image/card-payment (1).png')" onmouseout="changeIcon(this, '../image/card-payment.png')">
                    <img src="../image/card-payment.png" class="nav-admin-logo">    
                    Payment</a></li>
                <li class="li"><a class="a" href="add_rooms.php" onmouseover="changeIcon(this, '../image/hotel (5).png')" onmouseout="changeIcon(this, '../image/hotel (4).png')">
                    <img src="../image/hotel (4).png" class="nav-admin-logo">    
                    Add room</a></li>
                <li class="li"><a class="a" href="index.php" onmouseover="changeIcon(this, '../image/power-off.png')" onmouseout="changeIcon(this, '../image/power-off (1).png')">
                    <img src="../image/power-off (1).png" class="nav-admin-logo">    
                    Logout</a></li>
            </ul>
        </div>
    </div>
    <script>
        function changeIcon(element, newIconSrc) {
            var img = element.querySelector('.nav-admin-logo');
            img.src = newIconSrc;
        }

        var btnContainer = document.getElementById("act");

        // Get all buttons with class="btn" inside the container
        var btns = btnContainer.getElementsByClassName("li");

        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
        }

        function changeLogo(element, newLogoSrc) {
            var img = element.querySelector('.nav-icon-img-header');
            img.src = newLogoSrc;
        }
    </script>
</body>
</html>
