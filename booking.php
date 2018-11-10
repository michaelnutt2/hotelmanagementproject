<html>
<head>
  <title>Booking</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/header.php");?>
  <!--- INSERT FORM TO BOOK HERE  --->
  <form style= "margin-left:500px; margin-right:500px; margin-top:20px" action="booking2.php" method="post">
    <fieldset>
      <legend>Search Rooms</legend>
      <div class="form-group">
        <label for="numOfGuests">Number of Beds</label>
        <input type="number" class="form-control" id="numOfGuests" min="1" max="4" name="numbeds" placeholder="Enter Number of Beds">
      </div>
      <div class="form-group">
        <label for="startDate">Check-In Date</label>
        <input type="date" class="form-control" id="startDate" name="startDate" placeholder="00/00/0000">
      </div>
      <div class="form-group">
        <label for="endDate">Check-Out Date</label>
        <input type="date" class="form-control" id="endDate" name="stopDate" placeholder="00/00/0000">
      </div>
  <!--- Print out the available rooms here???? --->
  <!--- Michael, php will need to be placed here to populate the available rooms--->
    <button type="submit" class="btn btn-primary">Find Rooms</button>
    <br>
  </fieldset>
  </form>
  <!--- END FORM TO BOOK HERE  --->

  </body>
  </html>
