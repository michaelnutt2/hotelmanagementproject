<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Hotel Management System</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!---NavBar Start --->
	<?php include("includes/header.php");?>
	<!---NavBar End --->

<!---Start second navbar --->
<?php include("includes/scheduleNavbar.php");?>
<!---End second navbar --->


<!--- INSERT FORM TO Request off HERE  --->
<form style= "float: left; margin-left:250px;  margin-top:20px">
  <fieldset>
    <legend><h3>Time Off Request</h3></legend>

    <div class="form-group" style = "width:50%;">
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

<div class="form-group" style = "width:50%;">
<select class="custom-select">
<option selected="">Employee</option>
<option value="1">1</option>
<option value="2">2</option>
</select>
</div>

      <div class="form-check" style = "margin-left:50px; ">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" checked="">
          Sunday
        </label>
      </div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" value="" checked="">
					Monday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" value="" checked="">
					Tuesday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" value="" checked="">
					Wednesday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" value="" checked="">
					Thursday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" value="" checked="">
					Friday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" value="" checked="">
					Saturday
				</label>
			</div>
<br>

  <button type="submit" class="btn btn-primary">Submit Request</button>
  <br>
</fieldset>
</form>
<!--- END FORM TO Request off HERE  --->
<br><br>
<h3 style="display: none;"><center>Time Off Request Submitted </center></h3>


<!---Start Dropdown to select the week for the schedule --->
<h3 style="float: right; margin-right:300px; " >Cancel a Previous Request Off</h3>
<h5 style="float: right; margin-right:420px; ">Select the entry to cancel</h5>
<div class="form-group" style="width:20%; float: right; margin-right:360px;">
   <select class="custom-select">
     <option selected="">Open this select menu</option>
     <option value="1">One</option>
     <option value="2">Two</option>
     <option value="3">Three</option>
   </select>
 </div>

<button type="button" class="btn btn-primary btn-lg"  style="float: right; margin-right:375px; ">Cancel</button>

<!---End Dropdown to select the week for the schedule --->

</body>
</html>
