<?php
//This is the Rooms class
class Rooms
{
    //Methods
    public function select_all(){
      $db = new Database;
      $results = $db->select("*","rooms");
      return $results;
    }

    public function select_avail_rooms(){
        return 0;
    }

    public function set_availability($room_number, $avail){
        return 0;
    }


}



?>
