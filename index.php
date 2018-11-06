<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Hotel Management System</title>
	<link rel="stylesheet" href="css/style.css">
  <?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/Database.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/Login.php");?>
</head>
<body>
  <script>console.log("Before php")</script>
  <?php
    $lg = new Login;
    $userpassErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $test = $lg->validate_login($_POST["name"], $_POST["password"]);
      if($test)
      {
        echo("<script>location.replace('home.php')</script>");
      }
      else
      {
        $userpassErr = "Username or Password not found.";
      }
    }
    ?>
	<form style= "margin-left:500px; margin-right:500px; margin-top:150px " method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    <fieldset>
	      <legend>Login to Heartbreak Hotel</legend>
	      <div class="form-group">
	        <label for="username">Username</label>
	        <input type="text"  class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Enter username">
	      </div>
	      <div class="form-group">
	        <label for="exampleInputPassword1">Password</label>
	        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
	      </div>
        <span class="error"><?php echo $userpassErr;?></span>
	            <button type="submit" class="btn btn-primary">Submit</button>
	    </fieldset>
	  </form>

</body>
</html>
