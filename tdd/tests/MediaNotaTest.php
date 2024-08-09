<?php
use PHPUnit\Framework\TestCase;
use App\MediaNota;

class MediaNotaTest extends TestCase {
    public function testsomar()
    {
        $soma = new MediaNota();
        $resultadosoma = $soma->somar(10, 10);
        $this->assertEquals(20, $resultadosoma);
    }

    public function testDivisao()
    {
        $divisao = new MediaNota();
        $resultadodivisao = $divisao->divisao(20, 2);
        $this->assertEquals(10, $resultadodivisao);
    }
    
}