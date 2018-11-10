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
        $results = $db->select("*", "guest");
        return $results;
    }

    // Type is the column, Value is what you are looking for
    public function select_one($type, $value){
        $db = new Database;
        $query = $type."=".$value;
        $results = $db->select_one("*","guest",$query);
        return $results;
    }

    public function create_new($name, $phone, $email, $cc, $zip){
      $db = new Database;
      $query = "'".$name."','".$phone."','".$email."','".$cc."','".$zip."'";
      $id = $db->insert("Name, Phone, Email, CreditCard, Zip",$query,"guest");
      return $id;
    }
}
?>
