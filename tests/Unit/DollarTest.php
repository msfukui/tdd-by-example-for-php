<?php

declare (strict_types=1);

namespace TddByExampleForPhp;

describe("Dollar", function () {
    test("乗法のテスト", function () {
        $five = new Dollar(5);
        $five->times(2);
        expect($five->amount)->toBe(10);
    });
});
