<?php
  session_start();
  if(!isset($_SESSION['name']))
  {
  	header('Location: index.php');
	exit();
  }
  set_include_path(realpath('/includes')).PATH_SEPARATOR.get_include_path();

  function autoload($className)
  {
    require($className.'.php');
  }

  spl_autoload_register('autoload');

  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  
  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="images/logo.png" style="width:256px;height:100px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="schedules.php">Schedules</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="documents.php">Documents</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="checkin.php">Check-In</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="checkout.php">Check-Out</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="booking.php">Booking</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="includes/logout.php">Log Out</a>
      </li>
  </ul>
  </div>
</nav>';
?>
