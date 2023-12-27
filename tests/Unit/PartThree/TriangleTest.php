<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartThree;

use Exception;

describe('Triangle::evaluate()', function () {

    it('正三角形の判定', function () {
        expect(Triangle::evaluate(1, 1, 1))->toBe(1);
    });

    it('二等辺三角形の判定', function () {
        expect(Triangle::evaluate(1, 2, 2))->toBe(2);
    });

    it('その他三角形の判定', function () {
        expect(Triangle::evaluate(2, 3, 4))->toBe(3);
    });

    it('辺のいずれかが 0 の場合', function () {
        Triangle::evaluate(0, 2, 3);
    })->throws(Exception::class);

    it('辺のいずれかがマイナスの場合', function () {
        Triangle::evaluate(1, -1, 3);
    })->throws(Exception::class);

    it('辺の長さが他の二辺の長さの和以上の場合', function () {
        Triangle::evaluate(1, 2, 3);
    })->throws(Exception::class);
});
