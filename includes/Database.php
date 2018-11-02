<?php

// Sets up database and manages all queries
class Database
{
  private $server = "localhost";
  private $username = "hotel";
  private $password = "hotel";
  private $dbname = "hotel";
  private $results = [];

  // Connect to Database
  public function conn(){
    $conn = new mysqli($server, $username, $password, $dbname);

    if($conn->connect_error){
      echo "<script>console.log('Connection Failed')</script>";
      die("Connection Failed" . $conn->connect_error);
    }
    echo "<script>console.log('Connection Successful')</script>";
    $conn->query("USE hotel");
    return $conn;
  }

  public function select($what, $where){
    return $results;
  }

  public function insert($what, $where){
    return;
  }
}
?>
