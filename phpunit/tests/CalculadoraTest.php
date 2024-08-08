<?php

use PHPUnit\Framework\TestCase;

use App\Calculadora;

class CalculadoraTest extends TestCase
{
    public function testSomar()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->somar(2, 3);
        $this->assertEquals(5, $resultado);
    }
}
