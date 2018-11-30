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
   $pt = new PTO;
   $results = $pt->select_distinct();
   $row = $results->fetch_assoc();
   if($_SERVER["REQUEST_METHOD"] == "POST"){
     $default=$_POST["Week"];
   } else {
     $default=9;
   }

   if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(isset($_POST["Approve"])){
       $pt->update();
     }
   }
?>

<br><br>
<!---Start Dropdown to select the week for the schedule --->
<h3 style = "margin-left:150px;">Select Week To View </h3>
<div class="form-group" style="width:20%; margin-left:150px;">
   <select class="custom-select">
     <?php
        do{
          if($row["Week"]!=$default){
            $i = $row["Week"];
            if($i < 10){
              echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W0".$i)).'</option>';
            } else {
              echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W".$i)).'</option>';
            }
          }
          else{
            $i = $default;
            if($i < 10){
              echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W0".$i)).' (selected)</option>';
            } else {
              echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W".$i)).' (selected)</option>';
            }
          }
        }
        while($row=$results->fetch_assoc());
     ?>
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
				<th scope="col" >Approve</th>
				<th scope="col" >Deny</th>

				</tr>
    </thead>
    <tbody>

<!--- Michael, youll have to loop in php to print the
employees and their schedules here-------->

<?php
  if($default!=""){
    $days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
    $i = 0;
    $pt = new PTO;
    $query = "Week=".$default;
    $results = $pt->select_one($query);
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
        if($row[$days[$x]] == 1){
          echo "<td>Off</td>";
        } else {
          echo "<td></td>";
        }
      }
      echo "<td><button type='submit' class='btn btn-success disable' name='Approve'>Approve</button></td>";
      echo "<td><button type='submit' class='btn btn-danger disable' name='Deny'>Deny</button></td>";
      echo "</tr>";
    }
  }
?>

</tbody>
</table>

<!---Employee Schedule Table End --->






</body>
</html>
