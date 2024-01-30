<?php
use PHPUnit\Framework\TestCase;

class BoxTest extends TestCase
{
    public function testBoxContent()
    {
        $box = new App\Box(["toy"]);
        $this->assertTrue($box->has('toy'));
        $this->assertFalse($box->has('ball'));
    }
}