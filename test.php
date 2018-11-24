<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<html>
<head>
  <title>Test Page</title>
  <?php
   include("autoloader.php");
   ?>
</head>
<body>
  <?php
    $g = new Booking;
    $gid = $g->create_new("1","1","20181110","20181111");
    echo "<p>Booking: ".$gid."</p>";
  ?>
</body>
</html>

<!-- SELECT ID from rooms where ID<>1 AND ID<>2
    -> AND WHERE Num_Beds > 2 -->
