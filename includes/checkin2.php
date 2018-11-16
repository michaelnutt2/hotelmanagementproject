<html>
<head>
  <title>Check In</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/header.php");?>




    <form style= "margin-left:500px; margin-right:500px; margin-top:75px">
    <fieldset>
      <legend>Confirm Guest Information</legend>

      <div class="form-group">
        <label for="custName">Guest Name:</label>
      </div>

      <div class="form-group">
        <label for="custEmail">Guest Email:</label>
      </div>

      <div class="form-group">
        <label for="phoneNumber">Guest Room Number:</label>
      </div>




  <!--- Call the checkinConfirmation page --->
  <button type="submit" class="btn btn-primary">Check-In</button>


    </fieldset>
  </form>



    <button type="submit"style="display: none;" class="btn btn-primary">Search</button>

  </body>
  </html>
