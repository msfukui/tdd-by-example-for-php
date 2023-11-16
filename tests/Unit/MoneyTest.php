<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

describe("Money", function () {

    test("multiplication", function () {
        $five = Money::dollar(5);
        expect($five->times(2))->toEquals(Money::dollar(10));
        expect($five->times(3))->toEquals(Money::dollar(15));
    });

    test("equality", function () {
        expect((Money::dollar(5))->equals(Money::dollar(5)))->toBeTrue;
        expect((Money::dollar(5))->equals(Money::dollar(6)))->toBeFalse;
        expect((Money::franc(5))->equals(Money::dollar(5)))->toBeFalse;
    });

    test("currency", function () {
        expect(Money::dollar(1)->currency())->toBe("USD");
        expect(Money::franc(1)->currency())->toBe("CHF");
    });

    test("simple addition", function () {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduce($sum, "USD");
        expect($reduced)->toEquals(Money::dollar(10));
    });
});
