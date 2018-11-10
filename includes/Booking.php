<?php
//This is the bookings class
class Booking
{
  // Variables
  private $db;

  function __construct(){
    $this->db = new Database;
  }

  //Methods
  // Selects all from booking table
  public function select_all(){
    $results = $this->db->select("*", "booking");
    return $results;
  }

  // selects specified row, based on type and value for the search.
  public function select_one($type, $value){
    $query = $type."=".$value;
    $results = $this->db->select_one("*","booking", $query);
    return $results;
  }

  // Checks for available rooms
  public function select_available($start, $stop, $num){
    $test=array();
    $query = "";
    $i = 0;
    $q = "start>".$start." OR stop<".$stop;
    // Joins rooms with rooms that are booked
    $results = $this->db->join("rooms.ID","rooms","booking","ID","Room_ID",$q);
    // Compiles booked rooms into a list
    while($row = $results->fetch_assoc())
    {
      $test[$i] = "ID<>".$row["ID"];
      $i = $i + 1;
    }
    $length = count($test);
    // Returns false if no results are found
    if($length==0){
      $query = "numbeds>=".$num;
      $results = $this->db->select_one("*","rooms", $query);
    } else {
      for($j=0;$j<$length-1;$j++){
        $query .= $test[$j]." AND ";
      }
      // Checks for rooms that are available and have beds >= number requested
      $query .= $test[$j]." AND numbeds>=".$num;
      $results = $this->db->select_one("ID, numbeds", "rooms", $query);
    }
    return $results;
  }

  // Inserts new booking into database
  public function create_new($guestID, $roomID, $start, $stop){
    $query = $guestID.",".$roomID.",".$start.",".$stop;
    $id = $this->db->insert("Guest_ID, Room_ID, start, stop", $query, "booking");
    return $id;
  }
}
?>
