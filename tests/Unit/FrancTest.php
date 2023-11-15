<?php

declare (strict_types=1);

namespace TddByExampleForPhp;

describe("Franc", function () {

    test("multiplication", function () {
        $five = new Franc(5);
        expect($five->times(2))->toEqual(new Franc(10));
        expect($five->times(3))->toEqual(new Franc(15));
    });

    test("equality", function () {
        expect((new Franc(5))->equals(new Franc(5)))->toBeTrue;
        expect((new Franc(5))->equals(new Franc(6)))->toBeFalse;
    });
});