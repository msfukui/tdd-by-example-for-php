<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo;

abstract class TestCase
{
    public function __construct(protected readonly string $name)
    {
    }

    public function run(): void
    {
        $this->setUp();
        $this->{$this->name}();
        $this->tearDown();
    }

    public function setUp(): void
    {
    }

    public function tearDown(): void
    {
    }
}
