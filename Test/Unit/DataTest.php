<?php declare(strict_types=1);

namespace App;

use PHPUnit\Framework\TestCase;

final class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }

    /**
     * @dataProvider additionalDataProvider
     */
    public function testSubtract(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a-$b);
    }

    public function additionalDataProvider(): array
    {
        return [
            [10, 5, 5],
            [25, 10, 15],
            [19, 9, 10],
            [50,40, 10]
        ];
    }
}