<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

final class Franc extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals(object $object): bool
    {
        $franc = $object;
        return $this->amount === $franc->amount;
    }
};
