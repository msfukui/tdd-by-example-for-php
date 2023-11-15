<?php

declare (strict_types=1);

namespace TddByExampleForPhp;

describe("Franc", function () {

    test("multiplication", function () {
        $five = Money::Franc(5);
        expect($five->times(2))->toEqual(Money::Franc(10));
        expect($five->times(3))->toEqual(Money::Franc(15));
    });

    test("equality", function () {
        expect((Money::Franc(5))->equals(Money::Franc(5)))->toBeTrue;
        expect((Money::Franc(5))->equals(Money::Franc(6)))->toBeFalse;
    });
});
