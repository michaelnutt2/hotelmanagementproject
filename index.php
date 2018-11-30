<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Starts and destroys session to ensure no carry over
session_start();
session_unset();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Hotel Management System</title>
	<link rel="stylesheet" href="css/style.css">
  <?php include("includes/Database.php"); ?>
  <?php include("includes/Login.php");?>
</head>
<body>
  <?php
    $lg = new login;
    $userpassErr = "";

    // Called after user enters data on the page
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Checks if login is correct
	    if(empty($_POST["username"])){
	  	  $test = False;
	    } else {
        $test = $lg->validate_login($_POST["username"], $_POST["password"]);
      }
      if($test == False)
      {
        // Prints error on incorrect login
        $userpassErr = "Username or Password not found.";
      }
      else
      {
        // Sets session values for the user
        $_SESSION["name"] = $_POST["username"];
        $_SESSION["ID"] = $test["ID"];
        $_SESSION["role"] = $test["Role"];
        echo("<script>location.replace('home.php')</script>");
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
              <span class="error"><p><?php echo $userpassErr;?></p></span>
	            <button type="submit" class="btn btn-primary">Submit</button>
	    </fieldset>
	  </form>

</body>
</html>
