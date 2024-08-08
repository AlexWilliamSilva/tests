<?php

use PHPUnit\Framework\TestCase;

use App\Media;

class MediaTest extends TestCase
{
    public function testSoma()
    {   
        $somadosvalores = new Media();
        $resultado = $somadosvalores->soma(10, 10);
        $this->assertEquals(20, $resultado);
    }

    public function testdivisao()
    {
        $media = new Media();
        $resultado = $media->divisao(20, 2);
        $this->assertEquals(10, $resultado);
    }
}