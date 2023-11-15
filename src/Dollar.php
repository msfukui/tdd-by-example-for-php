<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

final class Dollar extends Money
{
    public function times(int $multiplier): Dollar
    {
        return Money::dollar($this->amount * $multiplier);
    }
};
