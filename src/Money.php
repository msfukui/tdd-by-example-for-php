<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

class Money
{
    protected int $amount;

    public function equals(object $object): bool
    {
        $money = $object;
        return $this->amount === $money->amount &&
            get_class($this) === get_class($money);
    }
};
