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

<br><br>
<!---Start Dropdown to select the week for the schedule --->
<h3 style = "margin-left:150px;">Select Week To View </h3>
<div class="form-group" style="width:20%; margin-left:150px;">
   <select class="custom-select">
     <option selected="">Open this select menu</option>
     <option value="1">One</option>
     <option value="2">Two</option>
     <option value="3">Three</option>
   </select>
 </div>
<!---End Dropdown to select the week for the schedule --->


<!---Employee Schedule Table Start --->
  <table width ="600" class="table table-hover" style= "margin-left:150px; margin-right:150px; margin-top:25px">
  <col width="200">
  <col width="200">
  <col width="200">
  <col width="200">
  <col width="200">
  <col width="200">
  <col width="200">
  <col width="200">
    <thead>
      <tr>
        <th scope="col" >Employee</th>
        <th scope="col" >Sunday</th>
        <th scope="col" >Monday</th>
        <th scope="col" >Tuesday</th>
        <th scope="col" >Wednesday</th>
        <th scope="col" >Thursday</th>
        <th scope="col" >Friday</th>
        <th scope="col" >Saturday</th>
        </tr>
    </thead>
    <tbody>

<!--- Michael, youll have to loop in php to print the
employees and their schedules here-------->

<!---Light --->
  <tr class="table-light">
    <th scope="row">Employee 1</th>
    <td>Sunday sched</td>
    <td>Moday sched</td>
    <td>tuesday sched</td>
    <td>wednesday sched</td>
    <td>thursday sched</td>
    <td>friday sched</td>
    <td>saturday sched</td>
  </tr>
  <!---Dark  --->
  <tr class="table-dark">
    <th scope="row">Employee 2</th>
    <td>Sunday sched</td>
    <td>Moday sched</td>
    <td>tuesday sched</td>
    <td>wednesday sched</td>
    <td>thursday sched</td>
    <td>friday sched</td>
    <td>saturday sched</td>
  </tr>
  <!---Light--->
  <tr class="table-light">
  <th scope="row">Employee 3</th>
  <td>Sunday sched</td>
  <td>Moday sched</td>
  <td>tuesday sched</td>
  <td>wednesday sched</td>
  <td>thursday sched</td>
  <td>friday sched</td>
  <td>saturday sched</td>
</tr>
<!---Dark --->
<tr class="table-dark">
  <th scope="row">Employee 4</th>
  <td>Sunday sched</td>
  <td>Moday sched</td>
  <td>tuesday sched</td>
  <td>wednesday sched</td>
  <td>thursday sched</td>
  <td>friday sched</td>
  <td>saturday sched</td>
</tr>

</tbody>
</table>

<!---Employee Schedule Table End --->






</body>
</html>
