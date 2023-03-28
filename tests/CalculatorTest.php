<?php

use App\Unittest\Calculator;
use PHPUnit\Framework\TestCase;


final class CalculatorTest extends TestCase {
    public function testCanAddTwoNumber(): void
    {
        $calculator = new Calculator();

        $sum = $calculator->addTwoNumber(200,300);

        $this->assertEquals($sum, $sum);
    }
}



?>