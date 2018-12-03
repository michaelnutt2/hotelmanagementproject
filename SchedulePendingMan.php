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
   $approveErr = "";
   if($_SERVER["REQUEST_METHOD"] == "POST"){
     $default=$_POST["Week"];
   } else {
     $default=$row["Week"];
   }

   if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(isset($_POST["Approve"])){
       $status = "Approved";
       $id = $_POST["Approve"];
     } else if(isset($_POST["Deny"])){
       $status = "Denied";
       $id = $_POST["Deny"];
     }
     if(isset($status)){
       if(!$pt->update($id, $status)){
         $approveErr = "Error processing request.";
       } else {
         $approveErr = "Request processed.";
       }
     }
   }
?>

<br><br>
<!---Start Dropdown to select the week for the schedule --->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3 style = "margin-left:150px;">Select Week To View </h3>
<div class="form-group" style="width:20%; margin-left:150px;">
   <select class="custom-select" name="Week">
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



<button style = "float: right; margin-right:1000px; margin-top:-50px; " type="submit" class="btn btn-outline-info">Update</button>


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
      // echo "<input type='hidden' name='Week' value='".$default."'/>";
      if($row["Status"] == "Pending"){
        echo "<td><button type='submit' class='btn btn-success' name='Approve' value='".$row["ID"]."'>Approve</button></td>";
        echo "<td><button type='submit' class='btn btn-danger disable' name='Deny' value='".$row["ID"]."'>Deny</button></td>";
      } else {
        if($row["Status"] == "Approved"){
          echo "<th scope='row'>Approved</th>";
          echo "<th scope='row'></th>";
          echo "</tr>";
        }else{
          echo "<th scope='row'></th>";
          echo "<th scope='row'>Denied</th>";
          echo "</tr>";
        }
      }
    }
  }
?>

</tbody>
</table>
</form>

<!---Employee Schedule Table End --->
</body>
</html>
