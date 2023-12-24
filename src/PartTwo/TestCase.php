<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo;

use Exception;

abstract class TestCase
{
    public function __construct(protected readonly string $name)
    {
    }

    public function run(TestResult $result): void
    {
        $result->testStarted();
        $this->setUp();
        try {
            $this->{$this->name}();
        } catch (Exception) {
            $result->testFailed();
        }
        $this->tearDown();
    }

    public function setUp(): void
    {
    }

    public function tearDown(): void
    {
    }
}
