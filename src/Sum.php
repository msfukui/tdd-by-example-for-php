<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

class Sum implements Expression
{
    public function __construct(public Money $augend, public Money $addend)
    {
    }

    public function reduce(string $to): Money
    {
        $amount = $this->augend->amount + $this->addend->amount;
        return new Money($amount, $to);
    }
}
