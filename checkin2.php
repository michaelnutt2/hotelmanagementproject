<html>
<head>
  <title>Check In</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include("includes/header.php");?>




    <form style= "margin-left:500px; margin-right:500px; margin-top:75px">
    <fieldset>
      <legend>Confirm Guest Information</legend>

      <div class="form-group">
        <label for="custName">Guest Name: <?php echo $_SESSION["guestName"];?></label>
      </div>

      <div class="form-group">
        <label for="custEmail">Guest Email: <?php echo $_SESSION["guestEmail"];?></label>
      </div>

      <div class="form-group">
        <label for="phoneNumber">Guest Room Number: <?php echo $_SESSION["roomNum"];?></label>
      </div>




  <!--- Call the checkinConfirmation page --->
  <button type="submit" class="btn btn-primary" formaction="checkinConfirmation.php">Check-In</button>


    </fieldset>
  </form>



    <button type="submit"style="display: none;" class="btn btn-primary">Search</button>

  </body>
  </html>
