<?php
error_reporting(0);
include 'config.php';
session_start();

// page redirect

// if(isset($_SESSION['usermail']) || $_SESSION['usermail'] == true){
//   // error_reporting(0);
//   $usermail= true;
// }else{
//   // error_reporting(0);
//   $usermail=false;
// }
?>



<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <!-- <link rel="stylesheet" href="../demo/home.css"> -->
  <title>Hotel blue bird</title>
  <!-- <link rel="stylesheet" href="../admin/css/roombook.css"> -->
  <style>
    
* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}
body{
    overflow-x: hidden;
    height: 100%;
    /* width: 100%; */
    width: 1800px;
}

#firstsection{
    height: 100vh;
    background-color: rgba(175, 175, 222, 0.511);
    width: 100%;
}


#firstsection .carousel-item{
    overflow: hidden;
}

#firstsection .carousel-item img{
    width: 100%;
    height: 100vh;
    
}


.btn{
    margin-top: -12px;
    font-size: 19px;
    border-radius: 0.25rem;
    background-color: #EEF5FF;
    color: #176B87;
    font-weight: 700;
    padding: 6px 12px;
    margin-left: 20px;
    box-shadow: none;
    border: none;
}

/* secondsection */

#secondsection{
    height: 100vh;
}

.ourroom{
    position: relative;
    top: 90px;
    height: 400px;
    width: 100%;
    /* background-color: #0040ff; */
}

.head{
    text-align: center;
    font-size: 35px;
margin-top: 40px;
    margin-bottom: 40px;
    color: #176B87;
}

.about_container{
    height: 450px;
    background-color: #B4D4FF; 
    padding: 20px; 
    border-radius: 10px; 
    box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
    width: 100%; 
    /* margin: auto;  */
}

.naming{
    text-align: center;
}

.about_head{
    color: #2c3e50; 
    font-size: 3rem; 
    margin-bottom: 0.2em;
}

.about_point{
    color: #2c3e50; 
    margin-top: 1em;
}

.about_fac{
    color: #34495e; 
    font-size: 1.2em;
}


    .footer {
      display: flex;
      justify-content: space-between;
      padding: 20px;
      background-color: #B4D4FF;
      width: 100%;
      height: 230px;
    }

    .column {
      flex: 1;
      color: #176B87;
    }

    .column h3 {
      /* padding: 0px 0px; */
      margin-right: 10px;
      text-transform: uppercase;
      color: #176B87;
    }

    .column p{
      margin-top: 10px;
      color: #176B87;
      text-align: justify;
      margin-right: 20px;
      /* text-justify: inter-word; */
    }

    .column ul {
      margin-top: 10px;
      color: #176B87;
    }

    .column ul li {
      list-style-type: none;
      color: #176B87;
    }

    .img-pay {
      object-fit: contain;
      height: 120px;
    }

    .img-icon {
      width: 10%;
      height: 13%;
      /* mix-blend-mode: color-burn; */
      margin-top: 10px;
      margin-right: 5px;
    }

    .img-icon1 {
      width: 13%;
      height: 15%;
      margin-top: 10px;
      /* margin-left: 5px; */
      margin-right: 5px;
    }

    .card {
      background-color: #B4D4FF;
      box-shadow: 0 20px 20px rgba(0, 0, 0, 0.7);
      width: 350px;
      margin-left: 20px;
      margin-right: 7px;
      height: 600px;
    }

    /* .card-img{

      width: 350px;
      height: 250px;
    } */

    .btn-m {
      font-size: large;
      margin-left: 45%;
      color: #002243;
      text-decoration: none;
      margin-bottom: 4%;
      font-weight: bold;
    }

    .card-title {
      font-weight: bold;
      margin-top: 15px;
      margin-left: 10px;
    }

    .card-text {
      font-weight: normal;
      margin-top: 15px;
      margin-left: 10px;
      font-family: sans-serif;
    }


    /* .btn-box {
      margin-left: 3%;

      padding: 7px 10px;
      color: #EEF5FF;
      text-decoration: none;
      width: 50%;
      font-size: large;
      background-color: #176B87;
    } */

    /* .h4 {
      margin-left: 4%;
      margin-top: 2%;
    } */

    .h4-s {
      margin-left: 20px;
      /* margin-top: 20px; */
    }

    .room-details {
      /* font-family: Times New Roman; */
      margin-left: 10px;
      font-size: 1.2rem;
      /* margin-right: 5px; */
      /* border-radius: 12px; */
    }

    /* .features {
      margin-left: 1%;
      margin-top: 2%;
      display: flex;
    } */

    .card-image{
      width: 350px;
      height: 250px;
    }
    .row {
      display: flex;
      /* grid-column: auto; */
      /* grid-template-columns: 1; */

    }

    .room-container{
      margin-top: 20px;
    }

    


.ourroom{
    position: relative;
    top: 90px;
    height: 400px;
    width: 100%;
    /* background-color: #0040ff; */
}

.head{
    text-align: center;
    margin-bottom: 40px;
}

.roomselect{
    display: flex;
    height: 100%;
    justify-content: space-evenly;
}

.roomselect .roombox{
    height: 540px;
    width: 320px;
    background-color: #B4D4FF;
    border-radius: 10px;
    overflow: hidden;
    /* margin: 0 20px; */
}

.hotelphoto{
    height: 250px;
    width: 350px;
    background-color: aquamarine;
    background-size: cover;
}

.h1{
    background-image: url(../image/hotel1photo.jpg);
}
.h2{
    background-image: url(../image/hotel2photo.jpg);
}
.h3{
    background-image: url(../image/1234564798.jpg);
}
.h4{
    background-image: url(../image/unsplash.jpg);
}

.roomdata{
    text-align: center;
}

.roomdata h2{
  margin-top: 10px;
color: #176B87;
font-size: 28px;
}

.services{
    display: flex;
    
}

.image-li{
                /* background-color: #34495e; */
                /* color:#176B87; */
                color: #3c5376;
                /* font-family: fantasy; */
                margin-left: 20px;
                font-size: 20px;
                /* margin-left: 16%; */
                /* margin-right: 25px; */
                margin-top: 10%;
                list-style-type: none;
                /* display: flex; */
                text-align: justify;
                align-content: center;
            }

            .image-li-s{
                /* background-color: #34495e; */
                /* color:#176B87; */
                color: #3c5376;
                font-family:sans-serif;
                text-align: justify;
                /* margin-left: 10px; */
                margin-top: 10px;
                font-size: 20px;
                margin-left: 8px;
                /* margin-right: 25px; */
                list-style-type: none;
            }
            .image{
                padding-top: 5px;
                margin-right: 5px;
                width: 20%;
                height: 34%;
            }
            .image-g,.image-d{
                padding-top: 5px;
                margin-right: 5px;
                width: 30px;
                height: 25px;
            }
            .image-s{
                padding-top: 5px;
                margin-right: 5px;
                width: 28px;
                height: 21px;
                margin-left: 8px;
                /* margin-bottom: 10px; */
            }

            .btn-s{
              margin-top: 8px;
            }

            .btn-d{
              margin-top: 11px;
            }

            #secondsection{
    height: 110vh;
    
}
    .rate{
      margin-top: 15px;
      margin-bottom: 15px;
    }

    .rate_text{
      color:#176B87;
      font-weight: 600;
      font-size: 20px;
    }

    .rate-d{
      margin-top: 35px;
      margin-bottom: 15px;
    }

    .rate_text-d{
      color:#176B87;
      font-weight: 600;
      font-size: 20px;
    }
	
	.r1{
		display: block;
	}
	
	.r2{
		display: block;
	}
	
	.r3{
		display: block;
	}
	
	.r4{
		display: block;
	}
  </style>
</head>

<body style="background-color: #EEF5FF;">

  <div>
    <?php include 'nav.php'; ?>
  </div>

  <section id="firstsection" class="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="carousel-image" src="../image/hotel1.jpg">
      </div>

    </div>

    </div>
  </section>

  <section id="secondsection">
    <form action="" method="POST">
<div class="ourroom">
  <h1 class="head" style="color: #176B87; font-family: fantasy;"> Our room </h1>
  <?php
	$sql = "select * from room where room_id=8";
	$result = mysqli_query($conn,$sql);
	
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$status= $row['status'];
	}
  ?>
  <div class="roomselect">
    <div class="roombox" id="r1">
      <div class="hotelphoto h1"></div>
      <div class="roomdata">
        <h2>Superior Room</h2>
        <div class="services">
        <ul class="image-ul superior">
                <li class="image-li-s"><img src="../image/wi-fi (2).png" class="image-s"> Wifi </li>
                <li class="image-li-s"><img src="../image/phone-call.png" class="image-s"> Telephone </li>
                <li class="image-li-s"><img src="../image/queen-bed (5).png" class="image-s"> Master bed </li>
        </ul>
                <ul class="image-ul superior">      
                <li class="image-li-s"><img src="../image/tv-monitor (2).png" class="image-s"> Smart tv </li>
                <li class="image-li-s"><img src="../image/coolnes.png" class="image-s"> Refrigerator </li>
                <li class="image-li-s"><img src="../image/bath-tub (2).png" class="image-s"> Bathtub </li>
            </ul>
        </div>
        <div class="rate">
          <p class="rate_text">Price per night : 5000&#8377;</p>
        </div>
        <button class="btn btn-s" type="submit"><a href="login.php" style="text-decoration: none; color:#176B87;">Book</a></button>
      </div>
    </div>
    <div class="roombox" id="r2">
      <div class="hotelphoto h2"></div>
      <div class="roomdata">
        <h2>Deluxe Room</h2>
        <div class="services">
        <ul class="image-ul deluxe">
                <li class="image-li"><img src="../image/wi-fi (2).png" class="image-d"> Wifi </li>
                <li class="image-li"><img src="../image/phone-call.png" class="image-d"> Telephone </li>
            </ul>
            <ul class="image-ul deluxe">
                <li class="image-li"><img src="../image/queen-bed (5).png" class="image-d"> Master bed </li>
                <li class="image-li"><img src="../image/tv-monitor (2).png" class="image-d"> Smart tv </li>
                
            </ul>
        </div>
        <div class="rate-d">
          <p class="rate_text-d">Price per night : 3000&#8377;</p>
        </div>
        <button class="btn btn-d" type="submit"><a href="login.php" style="text-decoration: none; color:#176B87;">Book</a></button>
      </div>
    </div>
    <div class="roombox" id="r3">
      <div class="hotelphoto h3"></div>
      <div class="roomdata">
        <h2>Guest Room</h2>
        <div class="services">
        <ul class="image-ul guest">
                <li class="image-li"><img src="../image/wi-fi (2).png" class="image-d"> Wifi </li>
                <li class="image-li"><img src="../image/phone-call.png" class="image-d"> Telephone </li>
            </ul>
            <ul class="image-ul guest">
                <li class="image-li"><img src="../image/single-bed.png" class="image-d"> Single bed </li>
                <li class="image-li"><img src="../image/double-bed.png" class="image-d"> Double bed </li>
            </ul>
        </div>
        <div class="rate-d">
          <p class="rate_text-d">Price per night : 2000&#8377;</p>
        </div>
        <button class="btn btn-d" type="submit"><a href="login.php" style="text-decoration: none; color:#176B87;">Book</a></button>
      </div>
    </div>
    <div class="roombox" id="r4">
      <div class="hotelphoto h4"></div>
      <div class="roomdata">
        <h2>Single Room</h2>
        <div class="services">
        <ul class="image-ul single">
                <li class="image-li"><img src="../image/wi-fi (2).png" class="image-d"> Wifi </li>
                <li class="image-li"><img src="../image/phone-call.png" class="image-d"> Telephone </li>
            </ul>
            <ul class="image-ul single">
                <li class="image-li"><img src="../image/single-bed.png" class="image-d"> Single bed </li>
            </ul>
        </div>
        <div class="rate-d">
          <p class="rate_text-d">Price per night : 1000&#8377;</p>
        </div>
        <button class="btn btn-d" type="submit"><a href="login.php" style="text-decoration: none; color:#176B87;">Book</a></button>
      </div>
    </div>
  </div>
</div>
</form>
</section>


  <section id="fourthsection">
    <h1 class="head" style="color: #176B87; font-family: fantasy;"> Gallery </h1>
    <div>
      <?php include 'gallery.html'; ?>
    </div>
  </section>

  <section id="contactus">
    <h1 class="head" style="color: #176B87; font-family: fantasy;"> Contact Us </h1>

    <div class="footer">
      <div class="column" >
        <h3 >About</h3>
        <p>Descend into a world that was once the sole preserve of royalty, step onto the soft, white sand beaches at a secluded island or discover the hidden secrets of mist-draped hills with Taj</p>
      </div>
      <div class="column">
        <h3>Payment Accepted</h3>
        <img src="../image/money.png" class="img-icon1">
        <img src="../image/visa.png" class="img-icon1">
        <img src="../image/logo.png" class="img-icon1">
        <img src="../image/paypal.png" class="img-icon1">
        
      </div>
      <div class="column">
        <h3>Follow us on</h3>
        <img src="../image/facebook.png" class="img-icon">
        <img src="../image/instagram.png" class="img-icon">
        <img src="../image/twitter.png" class="img-icon">
        <img src="../image/youtube.png" class="img-icon">

        
      </div>
      <div class="column">
        <h3>Explore</h3>
        <ul>
          <li>Policies</li>
          <li>Legal Notice</li>
          <li>Terms And Conditions</li>
          <li>About Us</li>
          <li>Secure Payment</li>
        </ul>
      </div>
    </div>

  </section>
  
  <script>
	var value1 = document.getElementById('r1');
	
	if (<?php echo $status; ?> === "active")
	{
		value1.style.display = 'none';
	}
  </script>
</body>

</html>