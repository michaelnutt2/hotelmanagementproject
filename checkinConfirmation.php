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
    <p class="lead">Room Number: <?php echo $_SESSION["roomNum"];?></p>
    <p class="lead">Guest Name: <?php echo $_SESSION["guestName"];?></p>
    <p class="lead">Guest E-Mail: <?php echo $_SESSION["guestEmail"];?></p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="home.php" role="button" formaction="home.php">Go Home</a>
  </p>
  </center>
</div>



</body>
</html>
