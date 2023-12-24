<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo;

class TestResult
{
    private int $runCount = 0;

    public function testStarted(): void
    {
        $this->runCount++;
    }

    public function summary(): string
    {
        return sprintf("%d run, 0 failed", $this->runCount);
    }
}
