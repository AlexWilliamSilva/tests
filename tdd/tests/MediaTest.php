<?php
use PHPUnit\Framework\TestCase;
use App\Media;

class MediaTest extends TestCase
{
    public function testSomar()
    {
        $media = new Media();

        $this->assertEquals(5, $media->somar(2, 3));
        $this->assertEquals(0, $media->somar(-1, 1));
        $this->assertEquals(0, $media->somar(0, 0));
    }

    public function testDivide()
    {
        $media = new Media();

        $this->assertEquals(5, $media->divide(10, 2));
        $this->assertEquals(-2, $media->divide(-6, 3));
        $this->assertEquals(2.5, $media->divide(5, 2));

        $this->expectException(DivisionByZeroError::class);
        $media->divide(5, 0);
    }
}