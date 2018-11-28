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
<?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/scheduleNavbar.php");?>

<!---End second navbar --->

<!---Start of the right side of the page --->
<br>
<form style= "float:right; margin-right:200px; ">
<!---Start Dropdown to select the week for the schedule --->
<h3 >Select Week To View </h3>
<div class="form-group" ><!---style=" float: right; width:20%; margin-right:-250px; margin-top:50px;">--->
   <select class="custom-select">
     <option selected="">Open this select menu</option>
     <option value="1">One</option>
     <option value="2">Two</option>
     <option value="3">Three</option>
   </select>
 </div>
<!---End Dropdown to select the week for the schedule --->


<!---Employee Schedule Table Start --->
	<h3 >Current Request Off </h3>
  <table width ="200" class="table table-hover" >
  <col width="150">
  <col width="250">

    <thead>
      <tr>
        <th scope="col" >Employee</th>
        <th scope="col" >Dates Requested</th>
				</tr>
    </thead>
    <tbody>

<!---Light --->
  <tr class="table-light">
    <th scope="row">Employee 1</th>
    <td>days</td>
	</tr>
  <!---Dark  --->
  <tr class="table-dark">
    <th scope="row">Employee 2</th>
    <td>days</td>
  </tr>
  <!---Light--->
  <tr class="table-light">
  <th scope="row">Employee 3</th>
  <td>days</td>
  </tr>
<!---Dark --->
<tr class="table-dark">
  <th scope="row">Employee 4</th>
  <td>days</td>
</tr>

</tbody>
</table>

<button  style = "float: right;"type="button" class="btn btn-outline-info">Update</button>

</form>
<!---END the right side of the page --->


<!---Start of the left side of the page --->
<br>
<h4 style = "margin-left:50px; ">Enter the starting times for the selected employee</h4>
<br><br>

<form style = "float: left; width:30%;">
<div class="form-group" style=" width:65%;">
   <select class="custom-select">
     <option selected="">Employee</option>
     <option value="1">One</option>
     <option value="2">Two</option>
     <option value="3">Three</option>
   </select>
 </div>


 <div style="width:50%;"class="form-group">
	 <label for="startDate">Sunday</label>
	 <input type="time" class="form-control" id="startTime" placeholder="HH:MM">
 </div>
 <div class="form-group" style="width:50%;">
	 <label for="endDate">Monday</label>
	 <input type="time" class="form-control" id="endTime" placeholder="HH:MM">
 </div>
 <div class="form-group" style="width:50%;">
	 <label for="endDate">Tuesday</label>
	 <input type="time" class="form-control" id="endTime" placeholder="HH:MM">
 </div>


 <button  style = "float:left; margin-left:25px; "type="button" class="btn btn-outline-info">Submit</button>

</form>


 <form style = "float:left; width:30%; ">
 <div class="form-group" style="width:50%;">
	<label for="endDate">Wednesday</label>
	<input type="time" class="form-control" id="endTime" placeholder="HH:MM">
 </div>
 <div class="form-group" style="width: 50%;">
	 <label for="endDate">Thursday</label>
	 <input type="time" class="form-control" id="endTime" placeholder="HH:MM">
 </div>
 <div class="form-group" style="width:50%;">
	 <label for="endDate">Friday</label>
	 <input type="time" class="form-control" id="endTime" placeholder="HH:MM">
 </div>
 <div class="form-group" style="width:50%;">
	 <label for="endDate">Saturday</label>
	 <input type="time" class="form-control" id="endTime" placeholder="HH:MM">
 </div>

</form>
<!---END the left side of the page --->


</body>
</html>
