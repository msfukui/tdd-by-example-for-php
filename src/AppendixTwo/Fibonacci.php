<?php

declare(strict_types=1);

namespace TddByExampleForPhp\AppendixTwo;

class Fibonacci
{
    public static function calc(int $n): int
    {
        if ($n === 0) {
            return 0;
        }
        if ($n === 1) {
            return 1;
        }
        return self::calc($n - 1) + self::calc($n - 2);
    }
}
