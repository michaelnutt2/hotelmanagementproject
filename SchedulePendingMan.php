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
              echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W0".$i)).'</option>';
            } else {
              echo '<option value="'.$i.'">'.date("m-d",strtotime(date("Y")."W".$i)).'</option>';
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

<!---Light --->
  <tr class="table-light">
    <th scope="row">Employee 1</th>
    <td>Sunday sched</td>
    <td>Moday sched</td>
    <td>tuesday sched</td>
    <td>wednesday sched</td>
    <td>thursday sched</td>
    <td>friday sched</td>
    <td>saturday sched</td>
		<td><button type="button" class="btn btn-success disabled">Approve</button></td>
		<td><button type="button" class="btn btn-danger disabled">Deny</button></td>

  </tr>
  <!---Dark  --->
  <tr class="table-dark">
    <th scope="row">Employee 2</th>
    <td>Sunday sched</td>
    <td>Moday sched</td>
    <td>tuesday sched</td>
    <td>wednesday sched</td>
    <td>thursday sched</td>
    <td>friday sched</td>
    <td>saturday sched</td>
				<td><button type="button" class="btn btn-success disabled">Approve</button></td>
				<td><button type="button" class="btn btn-danger disabled">Deny</button></td>

  </tr>
  <!---Light--->
  <tr class="table-light">
  <th scope="row">Employee 3</th>
  <td>Sunday sched</td>
  <td>Moday sched</td>
  <td>tuesday sched</td>
  <td>wednesday sched</td>
  <td>thursday sched</td>
  <td>friday sched</td>
  <td>saturday sched</td>
	<td><button type="button" class="btn btn-success disabled">Approve</button></td>
	<td><button type="button" class="btn btn-danger disabled">Deny</button></td>
</tr>
<!---Dark --->
<tr class="table-dark">
  <th scope="row">Employee 4</th>
  <td>Sunday sched</td>
  <td>Moday sched</td>
  <td>tuesday sched</td>
  <td>wednesday sched</td>
  <td>thursday sched</td>
  <td>friday sched</td>
  <td>saturday sched</td>
	<td><button type="button" class="btn btn-success disabled">Approve</button></td>
	<td><button type="button" class="btn btn-danger disabled">Deny</button></td>
</tr>

</tbody>
</table>

<!---Employee Schedule Table End --->






</body>
</html>
