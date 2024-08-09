<?php
namespace App;

class Media 
{
    public function somar($a, $b)
    {
        return $a + $b;
    }

    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new \DivisionByZeroError("Divisão por zero não é permitida");
        }
        return $a / $b;
    }
}