<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

class Franc
{
    public function __construct(private int $amount)
    {
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
