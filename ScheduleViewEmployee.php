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



<br><br>
<center>
<h2 style = "font-family:Lucida Sans Unicode;">Viewing the schedule for <?php echo $_SESSION["name"];?></h2>
</center>
<br><br>

<?php
  $sc = new Schedule;
  $value = $_SESSION["ID"]." ORDER BY Week";
  $results = $sc->select_specific("Week","EID",$value);
  $row = $results->fetch_assoc();
  $default = $row["Week"];
  if($_SERVER["REQUEST_METHOD"]=="POST"){
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
  <button style = "float:right; margin-right:900px; margin-top:-50px; " type="submit" class="btn btn-outline-info">Update</button>
</form>

<!---End Dropdown to select the week for the schedule --->
<br>

<!---Employee Schedule Table Start --->
<center>
<?php
  $sc = new Schedule;
  $query = "Week=".$default." AND EID=".$_SESSION["ID"];
  $results = $sc->select_one($query);
  $results = $results->fetch_assoc();
?>
  <table width ="600" class="table" style= "margin-left:250px; margin-right:150px; margin-top:25px">
  <col width="300">
  <col width="300">
    <thead>
      <tr>
        <th scope="col" >Day</th>
        <th scope="col" >Start Time</th>
        </tr>
    </thead>
    <tbody>
<!---Light Sunday --->
  <tr class="table-light">
    <th scope="row">Sunday</th>
    <td><?php
      if($results["Sunday"] == null){
        echo "Off";
      } else {
        echo date('g:i',strtotime($results["Sunday"]))." am";
      }?></td>
  </tr>
  <!---Dark Monday --->
  <tr class="table-dark">
    <th scope="row">Monday</th>
    <td><?php
      if($results["Monday"] == null){
        echo "Off";
      } else {
        echo date('g:i',strtotime($results["Monday"]))." am";
      }?></td>
  </tr>
  <!---Light Tuesday --->
  <tr class="table-light">
  <th scope="row">Tuesday</th>
  <td><?php
    if($results["Tuesday"] == null){
      echo "Off";
    } else {
      echo date('g:i',strtotime($results["Tuesday"]))." am";
    }?></td>
</tr>
<!---Dark Wednesday --->
<tr class="table-dark">
  <th scope="row">Wednesday</th>
  <td><?php
    if($results["Wednesday"] == null){
      echo "Off";
    } else {
      echo date('g:i',strtotime($results["Wednesday"]))." am";
    }?></td>
</tr>
<!--- Light Thursday --->
<tr class="table-light">
<th scope="row">Thursday</th>
<td><?php
  if($results["Thursday"] == null){
    echo "Off";
  } else {
    echo date('g:i',strtotime($results["Thursday"]))." am";
  }?></td>
</tr>
<!---Dark Friday --->
<tr class="table-dark">
  <th scope="row">Friday</th>
  <td><?php
    if($results["Friday"] == null){
      echo "Off";
    } else {
      echo date('g:i',strtotime($results["Friday"]))." am";
    }?></td>
</tr>
<!---Light Saturday --->
<tr class="table-light">
<th scope="row">Saturday</th>
<td><?php
  if($results["Saturday"] == null){
    echo "Off";
  } else {
    echo date('g:i',strtotime($results["Saturday"]))." am";
  }?></td>
</tr>

</tbody>
</table>
</center>
<!---Employee Schedule Table End --->

</body>
</html>
