<?php

namespace Tests;

use App\Image;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    private Image $image;

    protected function setUp(): void
    {
        $this->image = new Image();
    }

    public function testGdExtensionAvailable(): void
    {
        $this->assertTrue($this->image->isGdAvailable(), 'GD extension should be available');
    }

    public function testCreateImage(): void
    {
        $result = $this->image->createImage(100, 50);

        $this->assertEquals(100, $result['width']);
        $this->assertEquals(50, $result['height']);
        $this->assertInstanceOf(\GdImage::class, $result['resource']);
    }
}
