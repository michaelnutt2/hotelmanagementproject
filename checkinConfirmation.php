<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/header.php");?>


<div class="jumbotron">
  <center>
     <h1 class="display-5">Guest has been checked in successfully!</h1>
  <p class="lead">Confirmation Number: "NUMBER"</p>
    <p class="lead">Room Number: "ROOM NUMBER"</p>
    <p class="lead">Guest Name: "NAME"</p>
    <p class="lead">Guest E-Mail: "Email"</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="home.php" role="button">Go Home</a>
  </p>
  </center>
</div>



</body>
</html>
