<?php
// Login class, handles password hashing and user validation

class login
{
	// Methods
  public function validate_login($username, $password){
    // $hash = password_hash($password, PASSWORD_DEFAULT);
    if($username == "")
      return False;
    $db = new Database;
    $where = 'Name="'.$username.'"';
    $results = $db->select_one("*","user",$where);
    $row = $results->fetch_assoc();
    // echo("Row:".$row["password"]."\nHash:".$hash."\n");
    if($row["password"] == $password)
      return $row;
    else
      return False;
  }

	// Selects one user based on user name
	public function select_one($type, $value){
    $db = new Database;
    $query = $type."=".$value;
    $results = $db->select_one("*","user",$query);

		return $results;
	}

}

?>
