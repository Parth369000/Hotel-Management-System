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

    .add_room_btn {
      background-color: #EEF5FF;
                color: #176B87;
      padding: 10px 15px;
      border: 2px solid #176B87;
      border-radius: 25px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
      justify-self: center;
    }

    .add_room_btn:hover {
     background-color: #176B87;
                color: #EEF5FF;
    }

    /* Adjusted CSS for checkboxes */
    .checkbox-group {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 5px;
    }

    .checkbox-label {
      color: #86B6F6;
    }

    .checkbox-input {
      cursor: pointer;
    }
	
	

  </style>
  <title>New Room Addition Form</title>
</head>
<body style="background-color: #EEF5FF;">
  <form action="add_room_success.php" method="post" >
    <h1>Addition of New Room</h1>
    <label for="room-type">Room Type:</label>
    <select name="roomType" id="room-type">
    <option value="not" selected>Type Of Room</option>
                        <option value="Single Room" class="sing_room">SINGLE ROOM</option>
                        <option value="Guest House" class="guest_room">GUEST HOUSE</option>
                        <option value="Deluxe Room">DELUXE ROOM</option>
                        <option value="Superior Room">SUPERIOR ROOM</option>
    </select>
    
    <label for="price">Price Per Night:</label>
    <input type="number" name="price" id="price" min="0" step="0.01" required>
    <!-- Checkboxes -->
	<label>Status:</label>
	<input type="text" name="status" id="status" value='' required><br>
    <!-- <div class="checkbox-group">
      <label class="checkbox-label"><input type="checkbox" name="amenities[]" id="amenity1" value="Single bed" class="checkbox-input"> Single bed</label>
      <label class="checkbox-label"><input type="checkbox" name="amenities[]" id="amenity2" value="Double bed" class="checkbox-input"> Double bed</label>
      <label class="checkbox-label"><input type="checkbox" name="amenities[]" id="amenity3" value="Master bed" class="checkbox-input"> Master bed</label>
      <label class="checkbox-label"><input type="checkbox" name="amenities[]" id="amenity4" value="Wifi" class="checkbox-input"> Wifi</label>
      <label class="checkbox-label"><input type="checkbox" name="amenities[]" id="amenity5" value="Telephone" class="checkbox-input"> Telephone</label>
      <label class="checkbox-label"><input type="checkbox" name="amenities[]" id="amenity6" value="Smart tv" class="checkbox-input"> Smart tv</label>
      <label class="checkbox-label"><input type="checkbox" name="amenities[]" id="amenity7" value="Refrigerator" class="checkbox-input"> Refrigerator</label>
      <label class="checkbox-label"><input type="checkbox" name="amenities[]" id="amenity8" value="Bathtub" class="checkbox-input"> Bathtub</label>
    </div> -->
    <button type="submit" name="add_room" class="add_room_btn">Add Room</button>
  </form>
</body>
</html>

