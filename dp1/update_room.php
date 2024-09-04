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
      padding: 20px;
      width: 300px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
      transition: transform 0.5s ease-in-out;
      display: grid;
      gap: 10px;
    }

    form:hover {
      transform: scale(1.02);
    }

    h1 {
      text-align: center;
      color: #176B87;
      grid-column: 1 / -1;
    }

    label {
      color: #86B6F6;
    }

    select,
    input,
    textarea {
      padding: 8px;
      box-sizing: border-box;
      transition: border-color 0.7s ease-in-out;
    }

    select:focus,
    input:focus,
    textarea:focus {
      border-color: #4caf50;
    }

    

    /* Adjusted CSS for checkboxes */
    .checkbox-group {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 15px;
    }

    .checkbox-label {
      color: #86B6F6;
    }

    .checkbox-input {
      cursor: pointer;
    }

	.update_btn {
      background-color: #EEF5FF;
                color: #176B87;
      padding: 10px 15px;
      border: 2px solid #176B87;
      border-radius: 25px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
      justify-self: center;
    }

    .update_btn:hover {
      background-color: #176B87;
                color: #EEF5FF;
    }
  </style>
  <title>Update Room</title>
</head>
<body style="background-color: #EEF5FF;">
  <form action="update_room_success.php" method="post">
    <h1>Update Room</h1>
    <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">
    <?php 
      $room_id = $_GET['room_id'];
      $roomType = $_GET['roomType']; 
      $price = $_GET['price']; 
      // echo $price;
      $status = $_GET['status'];
      $_SESSION['room_id'] = $room_id;
    ?>
    <label for="room-type">Room Type:</label>
    <?php
// Static options
            $staticOptions = [
                "Select your room type" => "Select your room type",
                "Single Room" => "Single Room",
                "Guest Room" => "Guest Room",
                "Deluxe Room" => "Deluxe Room",
                "Superior Room" => "Superior Room"
            ];
            
            // Query to fetch dynamic options from the database
            $sql = "SELECT * FROM room where room_id='$room_id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $roomType =  $row['roomType'];
                // echo $roomType;
                echo "<select name='roomType' id='roomType' class='selectinput' required>";
            
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
        ?><br>
    <label for="price">Price Per Night:</label>
    <input type="text" name="price" id="price" value='<?php echo $price; ?>' required><br>
    <label>Status:</label>
	<input type="text" name="status" id="status" value='<?php echo $status; ?>' required><br>
    <!-- <div class="checkbox-group">
      <?php
      //$amenities = explode(',', $amenities);
      //$availableAmenities = array("Single bed", "Double bed", "Master bed", "Wifi", "Telephone", "Smart tv", "Refrigerator", "Bathtub");
      //foreach ($availableAmenities as $amenity) {
        //  $checked = in_array($amenity, $amenities) ? 'checked' : '';
          //echo '<label class="checkbox-label"><input type="checkbox" class="checkbox-input" name="amenities[]" value="' . $amenity . '" ' . $checked . '>' . ucfirst($amenity) . '</label>';
      //}
      ?>
    </div> -->
    <br>
    <button type="submit" name="add_room" class="update_btn">Update Room</button>
  </form>
</body>
</html>
