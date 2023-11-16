<?php

declare (strict_types=1);

namespace TddByExampleForPhp;

class Bank
{
    private $rates = [];

    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function rate(string $from, string $to): int
    {
        if ($from === $to) {
            return 1;
        }
        $rate = $this->rates[$from][$to];
        return intval($rate);
    }

    public function addRate(string $from, string $to, int $rate): void
    {
        $this->rates[$from][$to] = $rate;
    }
}
