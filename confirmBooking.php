<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<html>
<head>
  <title>Booking</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/header.php");
  ?>
  <?php
    $g = new Guests;
    //name, phone, email, cc, zip
    $gid = $g->create_new($_POST["custName"],$_POST["custPhone"],$_POST["custEmail"],$_POST["cc"],$_POST["zip"]);
    $bk = new Booking;
    $bid = $bk->create_new($gid, $_POST["roomID"], $_SESSION["start"],$_SESSION["stop"]);

    $start = DateTime::createFromFormat('Ymd',$_SESSION["start"]);
    $stop = DateTime::createFromFormat('Ymd',$_SESSION["stop"]);
  ?>

<div class="jumbotron">
  <center>
     <h1 class="display-3">Room Booked Successfully!</h1>
  <p class="lead">Confirmation Number: <?php echo $bid ?></p>
    <p class="lead">Room Number: <?php echo $_POST["roomID"]?></p>
    <p class="lead">Check-In Date: <?php echo $start->format('m/d/Y')?></p>
    <p class="lead">Check-Out Date: <?php echo $stop->format('m/d/Y')?></p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="home.php" role="button">Go Home</a>
  </p>
  </center>
</div>

</body>
</html>
