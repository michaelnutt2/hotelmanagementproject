<html>
<head>
  <title>Check In</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/header.php");?>

  <form style= "margin-left:500px; margin-right:500px; margin-top:20px">
  <fieldset>
    <legend>Welcome to Guest Check In</legend>


      <form style= "margin-left:500px; margin-right:500px; margin-top:20px">
      <fieldset>
        <legend>Welcome to Guest Check In!</legend>

        <div class="form-group">
          <label for="custName">Guest Name</label>
          <input type="text"  class="form-control" id="custName"  placeholder="Enter Name">
        </div>
        <br>
    <button type="submit" class="btn btn-primary">Search</button>


    <br><br>
    <h3 style="display: none;"><center>Reservation Not Found </center></h3>
      <button type="submit" style="display: none;" class="btn btn-primary">Reservations</button>
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
