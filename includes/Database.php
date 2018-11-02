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
    $conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);

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
    $this->results = $conn->query($sql);

    $conn->close();

    return $this->results;
  }

  // Selects specific data using where statement
  public function select_one($what, $where, $which){
    $conn = $this->conn();

    // Selects specified data from matching specified paramaters
    $sql = "SELECT " . $what . " FROM " . $where . " WHERE " . $which;
    $this->results= $conn->query($sql);

    $conn->close();

    return $this->results;
  }

  public function insert($whatFields, $whatData, $where){
    $conn = $this->conn();

    $sql = "INSERT INTO " . $where . "(" . $whatFields . ") VALUES (" . $whatData . ")";
    $this->results = $conn->query($sql);

    $conn->close();
    return $this->results;
  }
}
?>
