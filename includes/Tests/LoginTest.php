<?php

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
  public function testValidateLoginValidUsernameValidPassword(){
    $lg = new login;
    $test = $lg->validate_login("testM", "test");
    $this->assertEquals(1, $test["ID"]);
  }

  public function testValidateLoginValidUsernameInvalidPassword(){
    $lg = new login;
    $test = $lg->validate_login("testM","wrong");
    $this->assertFalse($test);
  }

  public function testValidateLoginInvalidUsernameValidPassword(){
    $lg = new login;
    $test = $lg->validate_login("test","test");
    $this->assertFalse($test);
  }

  public function testValidateLoginInvalidUsernameInvalidPassword(){
    $lg = new login;
    $test = $lg->validate_login("wrong", "wrong");
    $this->assertFalse($test);
  }

  public function testValidateLoginNoUsername(){
    $lg = new login;
    $test = $lg->validate_login("","test");
    $this->assertFalse($test);
  }

  public function testSelectOne(){
    $lg = new login;
    $results = $lg->select_one("Name","'testM'");
    $row = $results->fetch_assoc();
    $this->assertEquals(1, $row["ID"]);
  }
}
?>
