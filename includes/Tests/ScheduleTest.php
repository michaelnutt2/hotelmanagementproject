<?php

use PHPUnit\Framework\TestCase;

class ScheduleTest extends TestCase
{
  public function testSelectAll(){
    $sc = new Schedule;
    $results = $sc->select_all();
    $row = $results->fetch_assoc();
    $this->assertEquals("1", $row["ID"]);
  }

  public function testSelectOne(){
    $sc = new Schedule;
    $result = $sc->select_one("EID","2");
    $this->assertEquals("2", $result["EID"]);
  }

  public function testSelectOneInvalidEID(){
    $sc = new Schedule;
    $result = $sc->select_one("EID","15");
    $this->assertEquals(Null, $result["EID"]);
  }
}
?>
