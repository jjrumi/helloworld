<?php

include 'HelloWorld.php';

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function testHello()
    {
        $obj = new HelloWorld();
        $this->assertEquals('Hola!', $obj->hello());
    }
}
