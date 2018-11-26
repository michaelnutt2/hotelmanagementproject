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


<!--- INSERT FORM TO Request off HERE  --->
<form style= "margin-left:500px; margin-right:500px; margin-top:20px">
  <fieldset>
    <legend>Time Off Request</legend>

    <div class="form-group">
  <select class="custom-select">
    <option selected="">Reason for Request Off</option>
    <option value="1">Vacation</option>
    <option value="2">Sick</option>
    <option value="3">Maternity/Paternity</option>
    <option value="4">Emergency</option>
    <option value="5">Bereavement</option>
    <option value="6">Other</option>
  </select>
</div>

    <div class="form-group">
      <label for="startDate">Start Date</label>
      <input type="date" class="form-control" id="startDate" placeholder="00/00/0000">
    </div>
    <div class="form-group">
      <label for="endDate">End Date</label>
      <input type="date" class="form-control" id="endDate" placeholder="00/00/0000">
    </div>
    <div class="form-group">
      <label for="startDate">Start Time</label>
      <input type="time" class="form-control" id="startTime" placeholder="HH:MM">
    </div>
    <div class="form-group">
      <label for="endDate">End Time</label>
      <input type="time" class="form-control" id="endTime" placeholder="HH:MM">
    </div>

  <button type="submit" class="btn btn-primary">Submit Request</button>
  <br>
</fieldset>
</form>
<!--- END FORM TO Request off HERE  --->
<br><br>
<h3 style="display: none;"><center>Time Off Request Submitted </center></h3>


</body>
</html>
