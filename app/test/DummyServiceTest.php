<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;

class DummyServiceTest extends TestCase
{
    public function testDummyMock()
    {
        $mock = $this->getMockBuilder("App\DummyItemImplement")
                        ->onlyMethods(['getName'])
                        ->getMock();

        $mock->expects($this->once())
            ->method('getName')
            ->willReturn('Test');

        $this->assertEquals('Test', $mock->getName());
    }
}
