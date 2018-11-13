<html>
<head>
  <title>Check Out</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/header.php");?>
  <h1>Check Out</h1>
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
