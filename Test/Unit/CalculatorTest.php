<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $calculator = new App\Calculator;
        $result = $calculator->add(20,5);

        $this->assertEquals(25, $result);
    }

    public function testSubtract()
    {
        $calculator = new App\Calculator;
        $result = $calculator->subtract(20,5);

        $this->assertEquals(15, $result);
    }

    public function testMultiply()
    {
        $calculator = new App\Calculator;
        $result = $calculator->multiply(20,5);

        $this->assertEquals(100, $result);
    }

    public function testDivide()
    {
        $calculator = new App\Calculator;
        $result = $calculator->divide(20,5);

        $this->assertEquals(4, $result);
    }

    public function testTrueReturnstrue ()
    {
        $output = false;
        if (1===1) {
            $output = true;
        }

        $this->assertTrue($output);
    }

    public function testCheckUserHasNameKey(): void
    {
        $user = [
            "name" => "Dipak",
            "age" => 28
        ];
        $this->assertArrayHasKey('name', $user);
    }

    public function testArrayContains(): void
    {
        $this->assertContains(3, [1, 2, 3]);
    }
}