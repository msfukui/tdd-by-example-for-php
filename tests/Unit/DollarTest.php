<?php

declare (strict_types=1);

namespace TddByExampleForPhp;

describe("Dollar", function () {

    test("multiplication", function () {
        $five = Money::dollar(5);
        expect($five->times(2))->toEqual(Money::dollar(10));
        expect($five->times(3))->toEqual(Money::dollar(15));
    });

    test("equality", function () {
        expect((Money::dollar(5))->equals(Money::dollar(5)))->toBeTrue;
        expect((Money::dollar(5))->equals(Money::dollar(6)))->toBeFalse;
    });
});
