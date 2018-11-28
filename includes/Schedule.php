<?php

// Queries data for the users schedule
class Schedule
{
	// Selets all users
	public function select_all(){
    $db = new Database;
    $results = $db->select("*","schedule");
    return $results;

	}

	// Selects one user based on Employee ID(ID)
	public function select_one($query){
    $db = new Database;
    $result = $db->select_one("*","schedule",$query);
		return $result;
	}

  public function select_specific($what, $type, $value){
    $db = new Database;
    $query = $type."=".$value;
    $result = $db->select_one($what,"schedule",$query);
    return $result;
  }

  public function select_distinct(){
    $db = new Database;
    $result = $db->select("distinct Week","schedule ORDER BY Week");
    return $result;
  }

  // Used for setting up a new user
  public function create_new(){
    return;
  }
}
?>
