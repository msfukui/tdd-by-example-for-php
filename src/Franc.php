<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

final class Franc extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = "CHF";
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }
};
