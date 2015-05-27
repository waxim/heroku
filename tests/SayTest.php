<?php

class SayTest extends PHPUnit_Framework_TestCase {
  
  public function testHello(){
    $this->assertEquals(Encore\Say::hello(), "Hello, world!");
  }
  
}