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
$createErr = "";
$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["update"])){
    $default = $_POST["Week"];
    $_SESSION["Week"] = $default;
  } else {
    if(isset($_SESSION["Week"])){
      $default = $_SESSION["Week"];
    } else {
      $default = date("W");
    }
  }
  if(isset($_POST["submit"])){
    echo "<p>".$_POST["Employee"]."</p>";
    $field = "EID, Week, ";
    $value = $_POST["Employee"].",".$default.", ";
    for($x = 0; $x < 6; $x++)
    {
      if($_POST[$days[$x]] > 0){
        $field .= $days[$x].", ";
        $value .= date("His", strtotime($_POST[$days[$x]])).", ";
      } else {
        $field .= $days[$x].", ";
        $value .= "NULL, ";
      }
    }
    if($_POST[$days[$x]] > 0){
      $field .= $days[$x];
      $value .= date("His", strtotime($_POST[$days[$x]]));
    } else {
      $field .= $days[$x];
      $value .= "NULL";
    }
    $sc = new Schedule;
    $createErr = "Schedule Set";
  }

} else {
  $default = date("W");
}

?>

<!---Start of the right side of the page --->
<br>
<form style= "float:right; margin-right:200px; " method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<!---Start Dropdown to select the week for the schedule --->
<h3 >Select Week To View </h3>
<div class="form-group" ><!---style=" float: right; width:20%; margin-right:-250px; margin-top:50px;">--->
   <select class="custom-select" name="Week">
  <?php
  for($i=1;$i<53;$i++){
    if($i < 10){
      echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W0".$i));
    } else {
      echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W".$i));
    }
    if($i == $default){
      echo ' (selected)';
    }
    echo '</option>';
  }
  ?>
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
      <?php
        $pt = new PTO;
        $query = "Week=".$default;
        $results = $pt->select_one($query);
        while($row = $results->fetch_assoc())
        {
          $lg = new login;
          $result = $lg->select_one("ID", $row["EID"]);
          $user = $result->fetch_assoc();
          if(($i % 2) == 0){
            echo '<tr class="table-light">';
          } else {
            echo '<tr class="table-dark">';
          }
          $i = $i + 1;
          echo '<th scope="row">'.$user["Name"].'</th>';
          echo '<td>';
          for($x = 0; $x < 7; $x++)
          {
            if($row[$days[$x]] == 1){
              echo $days[$x].' ';
            }
          }
          echo '</td>';
        }
      ?>
</tr>

</tbody>
</table>

<button  style = "float: right;"type="submit" name="update" class="btn btn-outline-info">Update</button>

</form>
<!---END the right side of the page --->


<!---Start of the left side of the page --->
<br>
<h4 style = "margin-left:50px; ">Enter the starting times for the selected employee for week:
  <?php
  if($default < 10){
    echo date("m-d",strtotime(date("Y")."W0".$default));
  } else {
    echo date("m-d",strtotime(date("Y")."W".$default));
  }
  ?></h4>
<br><br>

<form style = "float: left; width:30%;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<div class="form-group" style=" width:65%;">
   <select class="custom-select" name="Employee">
     <option selected="">Employee</option>
     <?php
        #here is where I select all users and itterate through them
        $db = new Database;
        $results = $db->select("*","user");
        while($employee = mysqli_fetch_assoc($results)){
      ?>
      <option value="<?php echo $employee['ID']; ?>"><?php echo $employee['Name']; ?></option>
        <?php } ?>
   </select>
 </div>


 <div style="width:50%;"class="form-group">
	 <label for="endTime">Monday</label>
	 <input type="time" class="form-control" id="endTime" placeholder="HH:MM" name="Monday">
 </div>
 <div class="form-group" style="width:50%;">
	 <label for="endDate">Tuesday</label>
	 <input type="time" class="form-control" id="endTime" placeholder="HH:MM" name="Tuesday">
 </div>
 <div class="form-group" style="width:50%;">
	 <label for="endDate">Wednesday</label>
	 <input type="time" class="form-control" id="endTime" placeholder="HH:MM" name="Wednesday">
 </div>

 <span class="error"><p><?php echo $createErr; ?></p></span>
 <button  style = "float:left; margin-left:25px; "type="submit" name="submit" class="btn btn-outline-info">Submit</button>

 <div class="form-group" style="width:50%;">
	<label for="endDate">Thursday</label>
	<input type="time" class="form-control" id="endTime" placeholder="HH:MM" name="Thursday">
 </div>
 <div class="form-group" style="width: 50%;">
	 <label for="endDate">Friday</label>
	 <input type="time" class="form-control" id="endTime" placeholder="HH:MM" name="Friday">
 </div>
 <div class="form-group" style="width:50%;">
	 <label for="endDate">Saturday</label>
	 <input type="time" class="form-control" id="endTime" placeholder="HH:MM" name="Saturday">
 </div>
 <div class="form-group" style="width:50%;">
	 <label for="endDate">Sunday</label>
	 <input type="time" class="form-control" id="endTime" placeholder="HH:MM" name="Sunday">
 </div>

</form>
<!---END the left side of the page --->



</body>
</html>
