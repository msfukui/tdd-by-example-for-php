<?php

declare (strict_types=1);

namespace TddByExampleForPhp;

interface Expression
{
    public function reduce(string $to): Money;
}
