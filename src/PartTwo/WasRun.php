<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo;

final class WasRun extends TestCase
{
    public bool $wasRun = false;

    public function testMethod(): void
    {
        $this->wasRun = true;
    }
}
