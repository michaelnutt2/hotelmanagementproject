<html>
<head>
  <title>Check In</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/header.php");?>
  <h1>Check In</h1>
  <form style= "margin-left:500px; margin-right:500px; margin-top:20px">
  <fieldset>
    <legend>Welcome to Guest Check In!</legend>
    <div class="form-group"> <!-- Change for search -->
        <select class="custom-select">
          <option selected="">Available Rooms</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

    <div class="form-group">
      <label for="custName">Guest Name</label>
      <input type="text"  class="form-control" id="custName"  placeholder="Enter First and Last Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Guest Email Address</label>
      <input type="email"  class="form-control" id="exampleInputEmail1"  placeholder="Enter Email">
    </div>
    <div class="form-group">
      <label for="phoneNumber">Guest Room Number</label>
      <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter Room Number">
    </div>
<!--<div class="form-group">
  <label for="ccNumber">Card Number</label>
  <input type="number" class="form-control" id="ccNumber" placeholder="Enter Card Number">
</div>

<div class="form-group">
  <label for="zip">Enter Zip Code</label>
  <input type="number" class="form-control" id="zip" placeholder="Enter Zip Code">
</div>

<div class="form-group">
  <label for="cvv">Enter CVV</label>
  <input type="number" class="form-control" id="cvv" placeholder="Enter CVV">
</div>-->
<br>
<button type="submit" class="btn btn-primary">Check In</button>
<button type="submit" class="btn btn-primary">Cancel</button>

  </fieldset>
</form>

</body>
</html>
