<?php

use PHPUnit\Framework\TestCase;
use Pfa\CiCdDemo\Calculator;

require_once __DIR__ . '/../vendor/autoload.php';

class CalculatorTest extends TestCase
{
    public function test_add()
    {
        $calc = new Calculator();

        $this->assertEquals(10, $calc->add(5, 5));
    }
}