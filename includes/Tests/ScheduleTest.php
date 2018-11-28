<?php

use PHPUnit\Framework\TestCase;

class ScheduleTest extends TestCase
{
  public function testSelectAll(){
    $sc = new Schedule;
    $results = $sc->select_all();
    $row = $results->fetch_assoc();
    $this->assertEquals("2", $row["ID"]);
  }

  public function testSelectOne(){
    $sc = new Schedule;
    $result = $sc->select_one("EID=3");
    $this->assertEquals("3", $result["EID"]);
  }

  public function testSelectSpecific(){
    $sc = new Schedule;
    $result = $sc->select_specific("Week","EID","3");
    $row = $result->fetch_assoc();
    $this->assertEquals("48",$row["Week"]);
  }

  public function testSelectOneInvalidEID(){
    $sc = new Schedule;
    $result = $sc->select_one("EID=15");
    $this->assertEquals(Null, $result["EID"]);
  }

  public function testSelectDistinct(){
    $sc = new Schedule;
    $result = $sc->select_distinct();
    $row=$result->fetch_assoc();
    $this->assertEquals("48",$row["Week"]);
  }
}
?>
