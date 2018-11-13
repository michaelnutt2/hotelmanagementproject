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

    <div class="form-group">
      <label for="custName">Guest Name</label>
      <input type="text"  class="form-control" id="custName"  placeholder="Enter Name">
    </div>
<center><h2> OR </h2></center>
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
<button type="submit" class="btn btn-primary">Search</button>


  </fieldset>
</form>

</body>
</html>
