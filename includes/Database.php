<?php

// Sets up database and manages all queries
class Database
{
  // Connect to Database
  public function conn(){
    $server = "localhost";
    $username = "hotel";
    $password = "hotel";
    $dbname = "hotel";

    // Connects to the server
    $conn = new mysqli($server, $username, $password, $dbname);

    // Checks if connection was Successful
    if($conn->connect_error){
      echo("<script>console.log('Connection Failed');</script>");
      die("Connection Failed".$conn->connect_error);
    }
    // Prints if was successful
    echo("<script>console.log('Connect Successful');</script>");
    $conn->query("USE hotel");
    return $conn;
  }

  // Select statement
  public function select($what, $where){
    // Connect to database
    $conn = $this->conn();

    // Selects specified data from specified table
    $sql = "SELECT ".$what." FROM ".$where;
    $results = $conn->query($sql);

    $conn->close();

    return $results;
  }

  // Selects specific data using where statement
  public function select_one($what, $where, $which){
    $conn = $this->conn();

    // Selects specified data from matching specified paramaters
    $sql = "SELECT " . $what . " FROM " . $where . " WHERE " . $which;
    $results= $conn->query($sql);

    $conn->close();

    return $results;
  }

  public function insert($whatFields, $whatData, $where){
    $conn = $this->conn();

    $sql = "INSERT INTO ".$where." (".$whatFields.") VALUES (".$whatData.")";
    $results = $conn->query($sql);

    $conn->close();
    return $results;
  }
}
?>
