<?php

declare (strict_types=1);

namespace TddByExampleForPhp;

interface Expression
{
    public function reduce(Bank $bank, string $to): Money;
}
