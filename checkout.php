<html>
<head>
  <title>Check Out</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include("includes/header.php");?>

    <?php
      $checkoutErr = "";
      $bk = new Booking;
      $gt = new Guests;

      if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Checks if form fields were filled
        if(empty($_POST["custName"]) AND empty($_POST["roomNum"])){
          $checkoutErr = "Enter Guest Name or Room Number.";
        }
        else
        {
          // Pulls up information based on Guest Name
          if(!empty($_POST["custName"])){
            $gresult = $gt->select_one("Name",$_POST["custName"]);
            $grow = $gresult->fetch_assoc();
            $result = $bk->select_one("Guest_ID", $grow["ID"]);
            $brow = $result->fetch_assoc();
          }
          // Pulls up information based on room number
          elseif(!empty($_POST["roomNum"])){
            $result = $bk->select_one("Room_ID",$_POST["roomNum"]);
            $brow = $result->fetch_assoc();
            $gresult = $gt->select_one("ID",$brow["Guest_ID"]);
            $grow = $gresult->fetch_assoc();
          }
          $_SESSION["bResult"] = $brow;
          $_SESSION["gResult"] = $grow;
          echo("<script>location.replace('checkoutConfirm.php')</script>");
        }
      }

    ?>

    <form style= "margin-left:500px; margin-right:500px; margin-top:20px" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>
      <legend>Check Out</legend>

      <div class="form-group">
        <label for="custName">Guest Name</label>
        <input type="text" name="custName" class="form-control" id="custName"  placeholder="Enter Name">
      </div>
  <center><h3> OR </h3></center>
      <div class="form-group">
        <label for="roomNum">Guest Room Number</label>
        <input type="tel" name="roomNum" class="form-control" id="roomNum" placeholder="Enter Room Number">
      </div>

  <br>
  <span class="error"><p><?php echo $checkoutErr;?></p></span>
  <button type="submit" class="btn btn-primary">Search</button>


    </fieldset>
  </form>

  </body>
  </html>






<!---
  <form style= "margin-left:500px; margin-right:500px; margin-top:20px">
  <fieldset>
    <legend>Welcome to Guest Check Out!</legend>
    <div class="form-group">
      <label for="custName">Guest Name</label>
      <input type="text"  class="form-control" id="custName"  placeholder="Enter First and Last Name">
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

    <fieldset class="form-group">
      <legend>Check Out Check List</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" checked="">
          Two room key cards
        </label>
      </div>
      <div class="form-check disabled">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" checked="">
          [2nd Check out option]
        </label>
      </div>
    </fieldset>
<br>
<button type="submit" class="btn btn-primary">Check Out</button>
<button type="submit" class="btn btn-primary">Cancel</button>

  </fieldset>
</form>
</body>
</html>
-->
