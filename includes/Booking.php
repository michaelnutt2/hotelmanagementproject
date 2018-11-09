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

  // Inserts new booking into database
  public function create_new($guestID, $roomID, $start, $stop){
    $query = $roomID.",".$guestID.",".$start.",".$stop;
    $this->db->insert("Guest_ID, Room_ID, start, stop", $query, "booking");
    return;
  }
}
?>
