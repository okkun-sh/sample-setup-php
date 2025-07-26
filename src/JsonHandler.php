<?php

namespace App;

class JsonHandler
{
    public function encode(array $data): string
    {
        $result = json_encode($data);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('JSON encoding failed: ' . json_last_error_msg());
        }

        return $result;
    }

}
