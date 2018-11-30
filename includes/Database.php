<?php

// Sets up database and manages all queries
class Database
{
  // Connect to Database
  public function conn(){
    $server = "michaelnutt.info";
    $username = "hotel";
    $password = "hotel";
    $dbname = "hotel";

    // Connects to the server
    $conn = new mysqli($server, $username, $password, $dbname);

    // Checks if connection was Successful
    if($conn->connect_error){
      die("Connection Failed".$conn->connect_error);
    }
    // Prints if was successful
    $conn->query("USE hotel");
    return $conn;
  }

  public function join($what, $table1, $table2,$table1col,$table2col,$where){

    $conn = $this->conn();
    $sql = "SELECT ".$what." FROM ".$table1." RIGHT JOIN ".$table2." ON ".$table1.".".$table1col."=".$table2.".".$table2col." WHERE ".$where;
    $results = $conn->query($sql);

    $conn->close();

    return $results;
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
    if($conn->query($sql) == True ){
      $results = $conn->insert_id;
    } else {
      $results = False;
      echo "<script>console.log(".$conn->error.")</script>";
    }

    $conn->close();
    return $results;
  }

}
?>
