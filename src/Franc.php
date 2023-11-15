<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

final class Franc extends Money
{
    public function times(int $multiplier): Franc
    {
        return Money::franc($this->amount * $multiplier);
    }
};
