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

<br><br>
<?php
  $sc = new Schedule;
  $results = $sc->select_distinct();
  $row = $results->fetch_assoc();
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $default=$_POST["week"];
  } else {
    $default=date("W");
  }
  ?>

<!---Start Dropdown to select the week for the schedule --->
<h3 style ="margin-left:150px; float: left;">Select Week To View </h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group" style="width:20%; margin-left:150px;">
     <select class="custom-select" name="week">
       <?php
        do
        {
          if($row["Week"]!=$default){
            echo "<option value='".$row["Week"]."'>".date('m-d',strtotime("2018W".$row["Week"]))."</option>";
          }
          else{
            echo "<option value=".$default." >".date('m-d',strtotime("2018W".$default))." (selected)</option>";
          }
        }
        while($row=$results->fetch_assoc());
      ?>
    </select>
   </div>
<!---End Dropdown to select the week for the schedule --->
  <button style = "float: right; margin-right:1000px; margin-top:-50px; " type="submit" class="btn btn-outline-info">Update</button>
</form>




<!---Employee Schedule Table Start --->
  <table width ="600" class="table" style= "margin-left:150px; margin-right:150px; margin-top:25px">
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
        <th scope="col" >Monday</th>
        <th scope="col" >Tuesday</th>
        <th scope="col" >Wednesday</th>
        <th scope="col" >Thursday</th>
        <th scope="col" >Friday</th>
        <th scope="col" >Saturday</th>
        <th scope="col" >Sunday</th>

        </tr>
    </thead>
    <tbody>

<!------- Michael, youll have to loop in php to print the
employees and their schedules here-------->

<!---Light --->
  <?php
    $days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
    $i = 0;
    $sc = new Schedule;
    $query = "Week=".$default;
    $results = $sc->select_one($query);
    while($row=$results->fetch_assoc())
    {
      $lg = new login;
      $result = $lg->select_one("ID",$row["EID"]);
      $us = $result->fetch_assoc();
      if(($i % 2) == 0){
        echo '<tr class="table-light">';
      } else {
        echo '<tr class="table-dark">';
      }
      $i = $i + 1;
      echo '<th scope="row">'.$us["Name"].'</th>';
      for($x = 0; $x < 7; $x++)
      {
        $time = $row[$days[$x]];
        if($time == null){
          $time = "Off";
          echo "<td>Off</td>";
        } else {
          echo "<td>".date('g:i',strtotime($row[$days[$x]]))."</td>";
        }
      }
      echo "</tr>";
    }
  ?>

</tbody>
</table>

<!---Employee Schedule Table End --->

</body>
</html>
