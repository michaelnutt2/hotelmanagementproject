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
<?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/scheduleNavbar.php");?>

<!---End second navbar --->
<?php
  $ptoErr = "";
  $ptoSuccess = "";
  $days = array("Monday"=>0,"Tuesday"=>0,"Wednesday"=>0,"Thursday"=>0,"Friday"=>0,"Saturday"=>0,"Sunday"=>0);
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    foreach($days as $day => $val){
      if(isset($_POST[$day])){
        $val = 1;
      }
    }
    $pt = new PTO;
    if($pt->create_new($days,$_SESSION["ID"],$_POST["week"],$_POST["reason"]) == FALSE){
      $ptoErr = "Request failed, please try again.";
    } else {
      $ptoSuccess = "Time Off Request Submitted!";
    }
  }
?>

<!--- INSERT FORM TO Request off HERE  --->
<form style= "float: left; margin-left:250px;  margin-top:20px" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend><h3>Time Off Request</h3></legend>

    <div class="form-group" style = "width:50%;">
  <select class="custom-select" name="reason">
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
  <span class="error"><p><?php echo $ptoErr;?></p></span>
  <button type="submit" class="btn btn-primary">Submit Request</button>
  <br>
</fieldset>
</form>
<!--- END FORM TO Request off HERE  --->
<br><br>
<h3 style="display: none;"><center><?php echo $ptoSuccess;?></center></h3>


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
