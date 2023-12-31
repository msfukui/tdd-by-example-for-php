<?php

declare (strict_types=1);

namespace TddByExampleForPhp\PartOne;

final readonly class Calculator
{
    public static function sum(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }
}
