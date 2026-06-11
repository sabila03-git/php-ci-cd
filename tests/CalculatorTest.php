<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();

        $this->assertEquals(10, $calc->add(5,5));
    }
}