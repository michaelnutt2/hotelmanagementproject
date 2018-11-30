<html>
<head>
  <title>Check In</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include("includes/header.php");?>
  <?php
    $guestErr = "";
    $test = False;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      // Checks if field was left empty
      if(empty($_POST["custName"])){
        $test = False;
      } else {
        // Queries for guest information
        $gt = new Guests;
        $results = $gt->select_one("Name",$_POST["custName"]);
        $row = $results->fetch_assoc();
        // Checks if guest exists
        if($row["ID"] == null){
          $test = False;
        } else {
          // Queries for booking information
          $_SESSION["guestName"] = $row["Name"];
          $_SESSION["guestEmail"] = $row["Email"];
          $bk = new Booking;
          $results = $bk->select_one("Guest_ID", $row["ID"]);
          $row = $results->fetch_assoc();
          // Checks if reservation exists
          if($row["ID"]==null){
            $test = False;
          } else {
            // Loads next page if guest and reservation exist.
            $_SESSION["roomNum"] = $row["Room_ID"];
            echo("<script>location.replace('checkin2.php')</script>");
          }
        }
      }
      // Error if guest or reservation don't exist
      if($test == False){
        $guestErr = "Reservation not found";
      }
    }
  ?>

      <form style= "margin-left:500px; margin-right:500px; margin-top:20px" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <fieldset>
        <legend>Check In</legend>

        <div class="form-group">
          <label for="custName">Guest Name</label>
          <input type="text"  class="form-control" id="custName"  placeholder="Enter Name" name="custName">
        </div>
        <br>
        <span class="error"><p><?php echo $guestErr;?></p></span>
    <button type="submit" class="btn btn-primary">Search</button>


    <br>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      if(!empty($_POST["custName"] && !$test)){
        echo '<h3 style="display: none;"><center>Reservation Not Found </center></h3>
      <button type="submit" class="btn btn-primary" formaction="booking.php">Booking</button>';
      }
    }
    ?>
    <!--- ^^^ here lies the hidden button --->

      </fieldset>
    </form>
<!--- search for the guest name,
      if found go to 'checkin2.php'
      if not found reveal hidden "go to reservaition button"
--->

    </body>
    </html>





<!---
    <div class="form-group">
      <label for="custName">Guest Name</label>
      <input type="text"  class="form-control" id="custName"  placeholder="Enter Name">
    </div>
    <legend style= "float: left; margin-left: 125px;"> --------- Or ---------</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Guest Email Address</label>
      <input type="email"  class="form-control" id="exampleInputEmail1"  placeholder="Enter Email">
    </div>
    <legend style= "float: left; margin-left: 125px;"> --------- Or ---------</legend>
    <div class="form-group">
      <label for="phoneNumber">Guest Room Number</label>
      <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter Room Number">
    </div>
<br>
<button type="submit" class="btn btn-primary">Search</button>


  </fieldset>
</form>

</body>
</html>
--->
