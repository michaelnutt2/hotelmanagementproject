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

  public function create_new($off,$EID, $week, $reason){
    $db = new Database;
    $where = "PTO";
    $fields = "EID,Week,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Status,Reason";
    $data = $EID.",".$week.",".$off['Monday'].",".$off['Tuesday'].",".$off['Wednesday'].",".$off['Thursday'].",".$off['Friday'].",";
    $data .= $off['Saturday'].",".$off['Sunday'].",'Pending','".$reason."'";
    $result = $db->insert($fields,$data,$where);
    return $result;
  }

}
?>
