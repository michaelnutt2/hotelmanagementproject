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
    // Connects to the server
    $conn = new mysqli($server, $username, $password, $dbname);

    // Checks if connection was Successful
    if($conn->connect_error){
      echo "<script>console.log("Connection Failed")</script>";
      die("Connection Failed" . $conn->connect_error);
    }
    // Prints if was successful
    echo "<script>console.log("Connection Successful")</script>";
    $conn->query("USE hotel");
    return $conn;
  }

  // Select statement
  public function select($what, $where){
    // Connect to database
    $conn = $this->conn();

    // Selects specified data from specified table
    $sql = "SELECT " . $what . " FROM " . $where;
    $result = $conn->query($sql);

    $conn->close();

    return $results;
  }

  // Selects specific data using where statement
  public function select_specific($what, $where, $which){
    $conn = $this->conn();

    // Selects specified data from matching specified paramaters
    $sql = "SELECT " . $what . " FROM " . $where . " WHERE " . $which;
    $result = $conn->query($sql);

    $conn->close();

    return $result;
  }

  public function insert($whatFields, $whatData, $where){
    $conn = $this->conn();

    $sql = "INSERT INTO " . $where . "(" . $whatFields . ") VALUES (" . $whatData . ")";
    $result = $conn->query($sql);

    $conn->close();
    return $result;
  }
}
?>
