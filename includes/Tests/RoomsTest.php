<?php

use PHPUnit\Framework\TestCase;

class RoomsTest extends TestCase
{
  public function testSelectAll(){
    $rm = new Rooms;
    $results = $rm->select_all();
    $row = $results->fetch_assoc();
    $this->assertEquals(1, $row["ID"]);
  }
}
?>
