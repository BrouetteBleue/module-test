<?php
class Calculatrice
{

    public function addition($a, $b)
    {
        return $a + $b;
    }

    public function soustraction($a, $b)
    {
        return $a - $b;
    }

    public function multiplication($a, $b)
    {
        return $a * $b;
    }

    public function division($a, $b)
    {
        if ($b == 0) {
            throw new Exception("Division par zéro impossible");
        }
        return $a / $b;
    }
}
