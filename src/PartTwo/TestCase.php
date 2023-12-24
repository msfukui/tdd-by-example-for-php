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
    }

    public function setUp(): void
    {
    }
}
