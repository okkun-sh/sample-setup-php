<?php

namespace Tests;

use App\Greeter;
use PHPUnit\Framework\TestCase;

class GreeterTest extends TestCase
{
    private Greeter $greeter;

    protected function setUp(): void
    {
        $this->greeter = new Greeter();
    }

    public function testHello(): void
    {
        $result = $this->greeter->hello('World');
        $this->assertEquals('Hello, World!', $result);
    }
}
