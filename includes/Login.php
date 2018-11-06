<?php
// Login class, handles password hashing and user validation

class login
{
	// Methods
  public function validate_login($username, $password){
    // $hash = password_hash($password, PASSWORD_DEFAULT);
    $db = new Database;
    $where = 'Name="'.$username.'"';
    $results = $db->select_one("password","user",$where);
    $row = $results->fetch_assoc();
    // echo("Row:".$row["password"]."\nHash:".$hash."\n");
    if($row["password"] == $password)
      return "True";
    else
      return "False";
  }

	// Selects one user based on user name
	public function select_one(){
		return 0;
	}

}

?>
