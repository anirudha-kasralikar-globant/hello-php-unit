<?php
namespace tests\HelloPHPUnit;
use HelloPHPUnit\SayHello;

class HelloTest extends Base
{
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testValidateSayHelloReturnHello()
    {
        $sayHello = new SayHello();
        $this->assertEquals('Hallo!', $sayHello->sayHallo());
    }
}
