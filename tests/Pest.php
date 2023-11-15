<?php

declare (strict_types=1);

namespace TddByExampleForPhp;

expect()->extend('toEquals', function ($expected) {
    if (method_exists($this->value, 'equals')) {
        return $this->value->equals($expected)
            ? $this->toBeObject()
            : $this->toEqual($expected);
    } else {
        return $this->toEqual($expected);
    }
});
