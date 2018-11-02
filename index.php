<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Hotel Management System</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Hotel Management System In Progress!</h1>
  <?php include($_SERVER['DOCUMENT_ROOT']."/includes/Database.php");?>
  <script>console.log("Starting db")</script>
  <?php
    $db = new Database;
    $result = $db->select("*", "Rooms");
    while($row = $result->fetch_assoc())
      echo $row[id] . " " . $row[available] . " " . $row[numbeds] . "\n";
  ?>
</body>
</html>
