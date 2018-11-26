<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Hotel Management System</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!---NavBar Start --->
	<?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/header.php");?>
	<!---NavBar End --->

<!---Start second navbar --->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="SchedViewMan.html">View All Schedules</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active show" data-toggle="tab" href="ScheduleSetMan.html">Set Schedules</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active show" data-toggle="tab" href="ScheduleslePendingMan.html">Pending Time Off Requests</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active show" data-toggle="tab" href="TimeOffRequestM.html">Time Off Request</a>
  </li>
</ul>

<!---End second navbar --->




<h1>Time off Request </h1>



</body>
</html>
