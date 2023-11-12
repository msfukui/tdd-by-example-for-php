<?php

declare (strict_types=1);

namespace TddByExampleForPhp;

describe("Dollar", function () {
    test("multiplication", function () {
        $five = new Dollar(5);
        $five->times(2);
        expect($five->amount)->toBe(10);
        $five->times(3);
        expect($five->amount)->toBe(15);
    });
});
