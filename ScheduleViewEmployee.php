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
    <a class="nav-link" data-toggle="tab" href="ScheduleViewEmployee.php">View Schedule</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active show" data-toggle="tab" href="TimeOffRequest.php">Request Off</a>
  </li>
</ul>

<!---End second navbar --->



<br><br>
<center>
<h2 style = "font-family:Lucida Sans Unicode;">Viewing the schedule for "NAME"</h2>
</center>
<br><br>


<!---Start Dropdown to select the week for the schedule --->
<div class="form-group" style="width:20%; margin-left:250px;">
   <select class="custom-select">
     <option selected="">Open this select menu</option>
     <option value="1">One</option>
     <option value="2">Two</option>
     <option value="3">Three</option>
   </select>
 </div>
<!---End Dropdown to select the week for the schedule --->
<br>

<!---Employee Schedule Table Start --->
  <table width ="600" class="table table-hover" style= "margin-left:250px; margin-right:150px; margin-top:25px">
  <col width="300">
  <col width="300">
    <thead>
      <tr>
        <th scope="col" >Day</th>
        <th scope="col" >Hours</th>
        </tr>
    </thead>
    <tbody>
<!---Light Sunday --->
  <tr class="table-light">
    <th scope="row">Sunday</th>
    <td>Column content</td>
  </tr>
  <!---Dark Monday --->
  <tr class="table-dark">
    <th scope="row">Monday</th>
    <td>Column content</td>
  </tr>
  <!---Light Tuesday --->
  <tr class="table-light">
  <th scope="row">Tuesday</th>
  <td>Column content</td>
</tr>
<!---Dark Wednesday --->
<tr class="table-dark">
  <th scope="row">Wednesday</th>
  <td>Column content</td>
</tr>
<!--- Light Thursday --->
<tr class="table-light">
<th scope="row">Thursday</th>
<td>Column content</td>
</tr>
<!---Dark Friday --->
<tr class="table-dark">
  <th scope="row">Friday</th>
  <td>Column content</td>
</tr>
<!---Light Saturday --->
<tr class="table-light">
<th scope="row">Saturday</th>
<td>Column content</td>
</tr>

</tbody>
</table>

<!---Employee Schedule Table End --->

</body>
</html>
