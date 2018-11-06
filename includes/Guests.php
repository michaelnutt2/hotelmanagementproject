<?php
//This is the bookings class
class Guests
{
    //Properties
    private $name = "";
    private $phone = "";
    private $email = "";
    private $credit_card = "";
    private $zip = "";
    private $result = [];

    //Methods
    public function select_all(){
        $db = new Database;
        $results = $db->select("*", "Guests");
        return $results;
    }

    public function select_one(){
        return 0;
    }

    public function create_new(){
        return 0;
    }


}



?>
