<?php

declare(strict_types=1);

namespace TddByExampleForPhp\AppendixTwo;

it('Fibonacci::calc()', function (int $n, int $expected) {
    expect(Fibonacci::calc($n))->toBe($expected);
})->with([
    [0, 0],
    [1, 1],
    [2, 1],
    [3, 2],
    [4, 3],
    [5, 5],
    [6, 8],
    [7, 13]
]);
