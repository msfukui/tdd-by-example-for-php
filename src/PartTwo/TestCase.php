<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo;

abstract class TestCase
{
    public function __construct(
        private readonly string $name
    )
    {
    }

    public function run(): void
    {
        $this->{$this->name}();
    }
}


