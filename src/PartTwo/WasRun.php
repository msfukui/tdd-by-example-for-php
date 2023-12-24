<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo;

final class WasRun extends TestCase
{
    public string $log = '';

    public function testMethod(): void
    {
        $this->log .= 'testMethod ';
    }

    public function setUp(): void
    {
        $this->log = 'setUp ';
    }

    public function tearDown(): void
    {
        $this->log .= 'tearDown ';
    }
}
