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
	public function select_one($type, $value){
    $db = new Database;
    $query = $type."=".$value;
    $result = $db->select_one("*","schedule",$query);
    $row = $result->fetch_assoc();
		return $row;
	}

  // Used for setting up a new user
  public function create_new(){
    return;
  }
}
?>
