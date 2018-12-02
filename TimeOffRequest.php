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
<?php
  function update_days(&$value, $day){
    if(isset($_POST[$day])){
      $value = 1;
    }
  }
  $pt = new PTO;
  $ptoErr = "";
  $ptoSuccess = "";
  $Week = "";
  $days = array("Monday"=>0,"Tuesday"=>0,"Wednesday"=>0,"Thursday"=>0,"Friday"=>0,"Saturday"=>0,"Sunday"=>0);
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    array_walk($days,"update_days");
    if($pt->create_new($days,$_SESSION["ID"],$_POST["week"],$_POST["reason"]) == False){
      $ptoErr = "Request failed, please try again.";
    } else {
      $ptoSuccess = "Time Off Request Submitted!";
    }
  }
?>

<!--- INSERT FORM TO Request off HERE  --->
<center>
<form style= "margin-top:20px" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend><h3>Time Off Request</h3></legend>

    <div class="form-group" style = "width:50%;">
  <select class="custom-select" name="reason">
    <option selected="">Reason for Request Off</option>
    <option value="Vacation">Vacation</option>
    <option value="Sick">Sick</option>
    <option value="Maternity-Paternity">Maternity/Paternity</option>
    <option value="Emergency">Emergency</option>
    <option value="Bereavement">Bereavement</option>
    <option value="Other">Other</option>
  </select>
</div>

<div class="form-group" style = "width:50%;">
<select class="custom-select" name="week">
<option selected="">Week</option>
<?php
for($i=1;$i<53;$i++){
  if($i < 10){
    echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W0".$i)).'</option>';
  } else {
    echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W".$i)).'</option>';
  }
}
?>
</select>
</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="Monday" type="checkbox" value="" >
					Monday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="Tuesday" type="checkbox" value="" >
					Tuesday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="Wednesday" type="checkbox" value="" >
					Wednesday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="Thursday" type="checkbox" value="" >
					Thursday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="Friday" type="checkbox" value="" >
					Friday
				</label>
			</div>
			<div class="form-check" style = "margin-left:50px; ">
				<label class="form-check-label">
					<input class="form-check-input" name="Saturday" type="checkbox" value="" >
					Saturday
				</label>
			</div>
      <div class="form-check" style = "margin-left:50px; ">
        <label class="form-check-label">
          <input class="form-check-input" name="Sunday" type="checkbox" value="" >
          Sunday
        </label>
      </div>
<br>
  <span class="error"><p><?php echo $ptoErr;?></p></span>
  <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit Request</button>
  <p><center><?php echo $ptoSuccess;?></center></p>
  <br>
</fieldset>
</form>

<!--- END FORM TO Request off HERE  --->
<br><br>


</body>
</html>
