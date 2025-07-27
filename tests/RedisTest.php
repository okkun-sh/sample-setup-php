<?php

namespace Tests;

use App\Redis;
use PHPUnit\Framework\TestCase;

class RedisTest extends TestCase
{
    private Redis $redis;

    protected function setUp(): void
    {
        $this->redis = new Redis();
    }

    public function testRedisExtensionAvailable(): void
    {
        $this->assertTrue($this->redis->isRedisAvailable(), 'Redis extension should be available');
    }
}