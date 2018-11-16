<html>
<head>
  <title>Check In</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/header.php");?>

  <form style= "margin-left:500px; margin-right:500px; margin-top:20px">
  <fieldset>
    <legend>Welcome to Guest Check In!</legend>


      <form style= "margin-left:500px; margin-right:500px; margin-top:20px">
      <fieldset>
        <legend>Welcome to Guest Check In!</legend>

        <div class="form-group">
          <label for="custName">Guest Name</label>
          <input type="text"  class="form-control" id="custName"  placeholder="Enter Name">
        </div>
    <center><h3> OR </h3></center>
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
