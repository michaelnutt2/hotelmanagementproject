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
    $data = $EID.",".$week.",".$off[0].",".$off[1].",".$off[2].",".$off[3].",".$off[4].",";
    $data .= $off[5].",".$off[6].",'Pending','".$reason."'";
    $result = $db->insert($fields,$data,$where);
    return $result;
  }
  public function delete_row($ID, $week){
    $db = new Database;
    $query = "EID=".$ID." AND Week=".$week;
    $db->delete("PTO",$query);
    return;
  }

}
?>
