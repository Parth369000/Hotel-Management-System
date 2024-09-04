<?php

include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
        background-color: transparent;
        width: 400px;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
      transition: transform 0.5s ease-in-out;
    }

    form:hover {
      transform: scale(1.02);
    }

    h1 {
      text-align: center;
      color: #176B87;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #86B6F6;
    }

    select,
    input,
    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      transition: border-color 0.7s ease-in-out;
    }

    select:focus,
    input:focus,
    textarea:focus {
      border-color: #4caf50;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
  <title>New Room Addition Form</title>
</head>
<body style="background-color: #EEF5FF;">
  <form action="add_profile_success.php" method="post" >
    <h1>Add New Customer</h1>
    <label for="Name">Name : </label>
    <input type="text" name="name" id="room-number" required>
    <br>
    <label for="email">Email : </label>
    <input type="email" name="Email" id="capacity" required>
    <br>
    <label for="password">Password : </label>
    <input type="password" name="Password" id="price" required>
    <br>
    <label for="password">Confirm Password : </label>
    <input type="password" name="CPassword" id="price" required>
    <br>
    <label for="mobno">Mobile no : </label>
    <input type="tel" name="mobno" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" oninvalid="this.setCustomValidity('Phone number must be 10 digit')" oninput="this.setCustomValidity('')" required>
    <br>
    <button type="submit" name="add_customer">Submit</button>
  </form>
</body>
</html>
