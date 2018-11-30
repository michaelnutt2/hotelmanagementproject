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
<?php
  $selected = date("W");
?>

<div class="form-group" style = "width:50%;">
<select class="custom-select">
<option selected="">Week</option>
<?php
for($i=1;$i<53;$i++){
  if($i != $selected) {
    if($i < 10){
      echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W0".$i)).'</option>';
    } else {
      echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W".$i)).'</option>';
    }
  } else {
    echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W".$i)).' (selected)</option>';
  }
}
?>
</select>
</div>
    <?php
      echo "<p>Week of ".date("m-d",strtotime("2018W".$selected))."</p>";
    ?>


			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="monday" type="checkbox" value="" >
					Monday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="tuesday" type="checkbox" value="" >
					Tuesday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="wednesday" type="checkbox" value="" >
					Wednesday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="thursday" type="checkbox" value="" >
					Thursday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="friday" type="checkbox" value="" >
					Friday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="saturday" type="checkbox" value="" >
					Saturday
				</label>
			</div>
      <div class="form-check" style = "margin-left:50px; ">
        <label class="form-check-label">
          <input class="form-check-input" name="sunday" type="checkbox" value="" >
          Sunday
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
     <option selected="">Pending Requests</option>
     <?php
      $pt = new PTO;
      $results = $pt->select_one($_SESSION["ID"]);
      while($row=$results->fetch_assoc())
      {
        echo "<option value='".$row["ID"]."'>".date("m-d-y",date("Y")."W".$row["Week"])."</option>";
      }
     ?>
   </select>
 </div>

<button type="button" class="btn btn-primary btn-lg"  style="float: right; margin-right:375px; ">Cancel</button>

<!---End Dropdown to select the week for the schedule --->

</body>
</html>
