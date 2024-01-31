<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class MarkIncompleteTest extends TestCase
{
    public function setUp(): void
    {
        if(!extension_loaded("varnish")) {
            $this->markTestSkipped("The varnish extension is not available.");
        }
    }

    public function testSomething(): void
    {
        // ...
    }
}