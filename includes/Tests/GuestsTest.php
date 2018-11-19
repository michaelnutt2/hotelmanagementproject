<?php

use PHPUnit\Framework\TestCase;

class GuestsTest extends TestCase
{
  public function testSelectAll(){
    $gt = new Guests;
    $results = $gt->select_all();
    $row = $results->fetch_assoc();
    $this->assertEquals("1", $row["ID"]);
  }

  public function testSelectOne(){
    $gt = new Guests;
    $results = $gt->select_one("ID","1");
    $row = $results->fetch_assoc();
    $this->assertEquals("1", $row["ID"]);
  }

  public function testSelectOneNotFound(){
    $gt = new Guests;
    $results = $gt->select_one("ID","5");
    $row = $results->fetch_assoc();
    $this->assertEquals(null, $row["ID"]);
  }
}
