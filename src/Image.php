<?php

namespace App;

class Image
{
    public function isGdAvailable(): bool
    {
        return extension_loaded('gd');
    }

    public function createImage(int $width, int $height): array
    {
        if (!extension_loaded('gd')) {
            throw new \RuntimeException('GD extension is not available');
        }

        $image = imagecreate($width, $height);
        $white = imagecolorallocate($image, 255, 255, 255);

        return [
            'width' => $width,
            'height' => $height,
            'resource' => $image
        ];
    }
}
