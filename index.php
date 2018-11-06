<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Hotel Management System</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <script>console.log("Before include")</script>
  <?php include($_SERVER['DOCUMENT_ROOT']."/includes/header.php");?>
  <script>console.log("After include")</script>

	<form style= "margin-left:500px; margin-right:500px; margin-top:150px ">
	    <fieldset>
	      <legend>Login to Heartbreak Hotel</legend>
	      <div class="form-group">
	        <label for="exampleInputEmail1">Email address</label>
	        <input type="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	      </div>
	      <div class="form-group">
	        <label for="exampleInputPassword1">Password</label>
	        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	      </div>
	            <button type="submit" class="btn btn-primary">Submit</button>
	    </fieldset>
	  </form>

</body>
</html>
