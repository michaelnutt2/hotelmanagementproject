<?php
//This is the PTO request class
class PTO
{
  // Methods
  public function select_one($ID){
    $db = new Database;
    $query = "EID=".$ID;
    $results = $db->select_one("*","PTO",$query);
    return $results;
  }

  public function select_all(){
    return 0;
  }

  public function create_new($days,$EID, $week, $reason){
    $db = new Database;
    $where = "PTO";
    $fields = "EID,Week,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Status,Reason";
    $data = $EID.",".$week.",".$days['Monday'].",".$days['Tuesday'].",".$days['Wednesday'].",".$days['Thursday'].",".$days['Thursday'].",".$days['Friday'].",";
    $data .= $days['Saturday'].",".$days['Sunday'].",'Pending','".$reason."'";
    $result = $db->insert($fields,$data,$where);
    return $result;
  }
  public function delete_row(){
    return 0;
  }

}
?>
