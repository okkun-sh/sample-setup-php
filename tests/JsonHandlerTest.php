<?php

namespace Tests;

use App\JsonHandler;
use PHPUnit\Framework\TestCase;

class JsonHandlerTest extends TestCase
{
    private JsonHandler $handler;

    protected function setUp(): void
    {
        $this->handler = new JsonHandler();
    }

    public function testEncode(): void
    {
        $data = ['name' => 'test', 'value' => 123];
        $result = $this->handler->encode($data);

        $this->assertJson($result);
        $this->assertStringContainsString('test', $result);
    }

}
