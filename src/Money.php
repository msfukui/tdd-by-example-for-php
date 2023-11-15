<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

abstract class Money
{
    abstract public function times(int $multiplier): Money;

    protected function __construct(protected int $amount, protected string $currency)
    {
    }

    public function equals(object $object): bool
    {
        $money = $object;
        return $this->amount === $money->amount &&
            get_class($this) === get_class($money);
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, "CHF");
    }

    public function currency(): string
    {
        return $this->currency;
    }
};
