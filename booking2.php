<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    include("includes/header.php");
  ?>
  <?php
    $bk = new Booking;
    $_SESSION["start"]=str_replace("-","",$_POST["startDate"]);
    $_SESSION["stop"]=str_replace("-","",$_POST["stopDate"]);
    $results = $bk->select_available($_SESSION["start"], $_SESSION["stop"], $_POST["numbeds"]);
  ?>
<form style= "margin-left:500px; margin-right:500px; margin-top:20px" action="confirmBooking.php" method="post">
  <fieldset>
    <legend>Make a Reservation</legend>
    <div class="form-group">
        <select class="custom-select" name="roomID">
          <?php
            // Prints none available if there are no rooms, otherwise lists available rooms
            if(!$results){
              echo "<option selected='' value='None Available'>None Available</option>";
            }
            else {
              $row=$results->fetch_assoc();
              echo "<option selected='' value=".$row["ID"].">".$row["ID"]."</option>";
              while($row=$results->fetch_assoc()){
                echo "<option value=".$row["ID"].">".$row["ID"]."</option>";
              }
            }
          ?>
        </select>
      </div>

    <div class="form-group">
      <label for="custName">Name</label>
      <input type="text"  class="form-control" id="custName" name="custName" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email"  class="form-control" id="exampleInputEmail1" name="custEmail" placeholder="Enter Email">
    </div>
    <div class="form-group">
      <label for="phoneNumber">Phone Number</label>
      <input type="tel" class="form-control" id="phoneNumber" name="custPhone" placeholder="Enter Phone Number">
    </div>
<div class="form-group">
  <label for="ccNumber">Card Number</label>
  <input type="number" class="form-control" id="ccNumber" name="cc" placeholder="Enter Card Number">
</div>

<div class="form-group">
  <label for="zip">Enter Zip Code</label>
  <input type="number" class="form-control" id="zip" name="zip" placeholder="Enter Zip Code">
</div>
<br>
<button type="submit" class="btn btn-primary">Make Reservation</button>
<button type="button" onclick="location.href='booking.php'" class="btn btn-primary">Cancel</button>

  </fieldset>
</form>

</body>
</html>
