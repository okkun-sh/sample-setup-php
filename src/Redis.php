<?php

namespace App;

class Redis
{
    public function isRedisAvailable(): bool
    {
        return extension_loaded('redis');
    }
}