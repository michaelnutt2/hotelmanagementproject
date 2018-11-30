<html>
<head>
  <title>Booking</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include("includes/header.php");?>
  <!--- INSERT FORM TO BOOK HERE  --->
  <?php
    $brow = $_SESSION["bResult"];
    $grow = $_SESSION["gResult"];
  ?>

<div class="jumbotron">
  <center>
     <h1 class="display-5">Guest Checked Out </h1>
    <p class="lead">Room Number: <?php echo $brow["Room_ID"];?></p>
    <p class="lead">Guest Name: <?php echo $grow["Name"];?></p>
    <p class="lead">Guest Email: <?php echo $grow["Email"];?></p>
<hr>
  <?php
    $start = strtotime($brow["start"]);
    $stop = strtotime($brow["stop"]);
    $duration = date('Ymd',$stop) - date('Ymd',$start);
    $cost = 100 * $duration;
    $tax = $cost * 0.0825;
    $total = $cost + $tax;
  ?>

    <p class="lead">Duration of Stay: <?php echo $duration." days";?></p>
    <p class="lead">Room Rate: $<?php echo $cost; ?></p>
    <p class="lead">Sales Tax: $<?php echo $tax; ?></p>
<hr>
    <p class="lead">Total: $<?php echo $total; ?></p>
<hr>
  <p class="lead">Charges have been applied to the card on file. </p>

  <p class="lead">
    <a class="btn btn-primary btn-lg" href="home.php" role="button">Go Home</a>
  </p>
  </center>
</div>



</body>
</html>
