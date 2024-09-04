<?php
error_reporting(0);
include '../config.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        * {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    }
        body{
    overflow-x: hidden;
    height: 100%;
    width: 100%;
    /* width: 1513px; */
}
nav{
    position: fixed;
    height: 60px;
    width: 100%;
    background-color: #B4D4FF;
    z-index: 200;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 90px;
}

.nav-ul{
    width: 600px;
    display: flex;
    align-items: center;
    margin-top: 15px;
    color: black;
}

.nav-li a{
    text-decoration: none;
    color: #176B87;
    font-weight: 600;
    cursor: pointer;
}

.nav-li-drop a{
    text-decoration: none;
    color: #176B87;
    background-color: #EEF5FF;
    font-weight: 700;
    cursor: pointer;
    display: none;
}


.nav-li,.nav-li-btn{
    margin-top: -12px;
    margin-left: 30px;
    color: black;
    display: inline-block;
    position: relative;
    text-decoration: none;
    list-style: none;
    cursor: pointer;
}

.nav-li-drop:after{
    content: "";
    display: block;
    margin: auto;
    width: 0px;
    height: 5px;
    background: #EEF5FF;
    transition: width 1s ease, background-color 1s ease;
}

.nav-li-drop:hover:after{
    width: 100%;
    background: #176B87;
}

.logo p {
    height: 100%;
    font-family: sans-serif;
    display: flex;
    align-items: center;
    font-weight: bold;
    font-size: 30px;
    color: #176B87;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.btn-nav{
    margin-top: -12px;
    font-size: 14px;
    border-radius: 0.25rem;
    background-color: #EEF5FF;
    color: #176B87;
    font-weight: 900;
    padding: 6px 12px;
    text-decoration: none;
    /* margin-left: 15px; */
    box-shadow: none;
    border: none;
    cursor: pointer;
}
.dropdown-content a {
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #176B87;
  min-width: 140px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.show {display: block;}


    </style>
<body>
<nav>
    <div class="logo">
      <!-- <img class="bluebirdlogo" src="./image/bluebirdlogo.png" alt="logo"> -->
      <p>BLUEBIRD</p>
    </div>
    <ul class="nav-ul">
      <li class="nav-li"><a href="#firstsection" class="nav-a">Home</a></li>
      <li class="nav-li"><a href="#secondsection" class="nav-a">Rooms</a></li>
      <li class="nav-li"><a href="#fourthsection" class="nav-a">Gallery</a></li>
      <li class="nav-li"><a href="#contactus" class="nav-a">Contact us</a>
      <li class="dropdown nav-li-btn"><a href="login.php" class=" dropbtn btn-nav" >Login </a>
        <!-- <ul id="myDropdown" class="dropdown-content">
        <li class="nav-li-drop"><a href="login.php" class="nav-a-drop">User Login</a></li>
        <li class="nav-li-drop"><a href="admin_login.php" class="nav-a-drop">Admin Login</a></li>
        </ul> -->
        </li>
       </ul>

       <script>
        function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
       </script>
</body>
</html>
