<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo;

use Exception;

final class WasRun extends TestCase
{
    public string $log = '';

    public function testMethod(): void
    {
        $this->log .= 'testMethod ';
    }

    /**
     * @throws Exception
     */
    public function testBrokenMethod(): void
    {
        throw new Exception();
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
