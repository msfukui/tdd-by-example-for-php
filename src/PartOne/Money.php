<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartOne;

class Money implements Expression
{
    public function __construct(public int $amount, protected string $currency)
    {
    }

    public function equals(object $object): bool
    {
        $money = $object;
        return $this->amount === $money->amount &&
            $this->currency() === $money->currency();
    }

    public function times(int $multiplier): Expression
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public static function dollar(int $amount): Money
    {
        return new Money($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, "CHF");
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function toString(): string
    {
        return $this->amount . ' ' . $this->currency;
    }

    public function plus(Expression $addend): Expression
    {
        return new Sum($this, $addend);
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
    }
};
