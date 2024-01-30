<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testTrueReturnstrue ()
    {
        $output = false;
        if (1===1) {
            $output = true;
        }

        $this->assertTrue($output);
    }

    /**
     * Without start function name with test keyword
     *
     * @test
     */
    public function checkUserHasNameKey(): void
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

    public function testArrayDiff(): void
    {
        $this->assertSame(
            [1, 2,  3, 4, 5, 6],
            [1, 2, 3, 4, 5, 6]
        );
    }

    public function testLongArrayDiff(): void
    {
        $this->assertSame(
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2,  3, 4, 5, 6],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 3, 4, 5, 6]
        );
    }

    /**
     * This test will failed due to weak array comparision
     */
    public function testArrayWeakComparison(): void
    {
        $this->assertEquals(
            [1, 2, 3, 4, 5, 6],
            ['1', 2, 3, 4, 5, 6]
        );
    }
}