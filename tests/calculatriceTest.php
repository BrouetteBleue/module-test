<?php

use PHPUnit\Framework\TestCase;

require('src\calculatrice.php');

class CalculatriceTest extends TestCase
{

    public function testAddition()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(5, $calculatrice->addition(2, 3));
        $this->assertEquals(-2, $calculatrice->addition(-5, 3));
        $this->assertEquals(0, $calculatrice->addition(0, 0));
    }

    public function testSoustraction()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(2, $calculatrice->soustraction(5, 3));
        $this->assertEquals(-8, $calculatrice->soustraction(-5, 3));
        $this->assertEquals(0, $calculatrice->soustraction(0, 0));
    }

    public function testMultiplication()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(6, $calculatrice->multiplication(2, 3));
        $this->assertEquals(-15, $calculatrice->multiplication(-5, 3));
        $this->assertEquals(0, $calculatrice->multiplication(0, 0));
    }

    public function testDivision()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(2, $calculatrice->division(6, 3));
        $this->assertEquals(-1, $calculatrice->division(3, -3));
        $this->expectException(Exception::class);
        $calculatrice->division(6, 0);
    }
}
