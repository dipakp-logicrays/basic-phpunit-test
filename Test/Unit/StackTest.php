<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    private $stack;

    protected function setUp(): void
    {
        $this->stack = [];
    }

    public function testEmpty(): void
    {
        $this->assertEmpty($this->stack);
    }

    public function testPush(): void
    {
        //  Add the string 'item1' to the end of "$this->stack" array
        array_push($this->stack,'item1');

        // Check if the last element of "$this->stack" is equal to 'item1'.
        $this->assertSame('item1',$this->stack[count($this->stack)-1]);

        // Check if "$this->stack" is not empty.
        $this->assertFalse(empty($this->stack));
    }

    public function testPop(): void
    {
        // Add the string 'item1' to the end of "$this->stack" array
        array_push($this->stack,'item1');

        // Check that the value returned by "array_pop" (which removes and returns the last item in the stack) is equal to the string 'item1'
        $this->assertSame('item1',array_pop($this->stack));

        $this->assertTrue(empty($this->stack));
    }
}