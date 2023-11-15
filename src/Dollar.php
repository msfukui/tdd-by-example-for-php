<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

final class Dollar extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function currency(): string
    {
        return "USD";
    }
};
