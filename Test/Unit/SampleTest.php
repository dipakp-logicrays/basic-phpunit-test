<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     *  Example for assertTrue()
     */
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
     * Example for assertArrayHasKey
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

    /**
     *  Example for assertContains()
     */
    public function testArrayContains(): void
    {
        $this->assertContains(3, [1, 2, 3]);
    }
    /**
     *  Example for assertSame(), short array diff
     */
    public function testArrayDiff(): void
    {
        $this->assertSame(
            [1, 2,  3, 4, 5, 6],
            [1, 2, 3, 4, 5, 6]
        );
    }

    /**
     *  Example for assertSame(), Long array diff
     */
    public function testLongArrayDiff(): void
    {
        $this->assertSame(
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2,  3, 4, 5, 6],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 3, 4, 5, 6]
        );
    }

    /**
     * Example for assertEquals()
     */
    public function testArrayWeakComparison(): void
    {
        $this->assertEquals(
            [1, 2, 3, 4, 5, 6],
            ['1', 2, 3, 4, 5, 6]
        );
    }

    /**
     * Example for markTestIncomplete()
     * @test
     */
    public function inCompleteTest(): void
    {
        //Optional: Test anything here, if you want
        $this->assertTrue(true,"This should already work.");

        //Stop here and mark this as in incomplete. print it with string
        $this->markTestIncomplete("This test has not been implemented yet.");

    }
}