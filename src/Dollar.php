<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

class Dollar
{
    public function __construct(public int $amount)
    {
    }

    public function times(int $multiplier): int|null
    {
        $this->amount *= $multiplier;
        return null;
    }
};
