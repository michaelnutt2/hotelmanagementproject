<?php
//This is the PTO request class
class PTO
{
  // Methods
  public function select_one($query){
    $db = new Database;
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

  public function select_distinct(){
    $db = new Database;
    $result = $db->select("distinct Week","PTO ORDER BY Week");
    return $result;
  }

  public function update($id, $status){
    $db = new Database;
    $query = "Status='".$status."' WHERE ID=".$id;
    $result = $db->update("PTO",$query);
    return $result;
  }

}
?>
