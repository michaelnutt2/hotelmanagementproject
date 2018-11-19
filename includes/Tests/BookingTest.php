<?php

use PHPUnit\Framework\TestCase;

class BookingTest extends TestCase
{
  public function testSelectAll(){
    $bk = new Booking;
    $results = $bk->select_all();
    $row = $results->fetch_assoc();
    $this->assertEquals("1009",$row["ID"]);

  }

  public function testSelectOneByValidRoomID(){
    $bk = new Booking;
    $results = $bk->select_one("Room_ID","1");
    $row = $results->fetch_assoc();
    $this->assertEquals("1009",$row["ID"]);
  }

  public function testSelectOneByValidGuestID(){
    $bk = new Booking;
    $results = $bk->select_one("Guest_ID","1");
    $row = $results->fetch_assoc();
    $this->assertEquals("1009",$row["ID"]);
  }

  public function testSelectOneByValidStart(){
    $bk = new Booking;
    $results = $bk->select_one("start","20181110");
    $row = $results->fetch_assoc();
    $this->assertEquals("1009",$row["ID"]);
  }

  public function testSelectOneByValidStop(){
    $bk = new Booking;
    $results = $bk->select_one("stop","20181111");
    $row = $results->fetch_assoc();
    $this->assertEquals("1009",$row["ID"]);
  }

  public function testSelectOneByInvalidRoomID(){
    $bk = new Booking;
    $results = $bk->select_one("Room_ID","100");
    $row = $results->fetch_assoc();
    $this->assertEquals("",$row["ID"]);
  }

  public function testSelectAvailableValidRange(){
    $bk = new Booking;
    $results = $bk->select_available("20181101","20181130","1");
    $row = $results->fetch_assoc();
    $this->assertEquals("2",$row["ID"]);
  }
}
?>
