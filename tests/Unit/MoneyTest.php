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

    test("plus returns sum", function () {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        expect($five)->toEquals($sum->augend);
        expect($five)->toEquals($sum->addend);
    });

    test("reduce sum", function () {
        $sum = new Sum(Money::dollar(3), Money::dollar(4));
        $bank = new Bank();
        $result = $bank->reduce($sum, "USD");
        expect($result)->toEquals(Money::dollar(7));
    });

    test("reduce money", function () {
        $bank = new Bank();
        $result = $bank->reduce(Money::dollar(1), "USD");
        expect($result)->toEquals(Money::dollar(1));
    });

    test("reduce money different currency", function () {
        $bank = new Bank();
        $bank->addRate("CHF", "USD", 2);
        $result = $bank->reduce(Money::franc(2), "USD");
        expect($result)->toEquals(Money::dollar(1));
    });

    test("identity rate", function () {
        expect((new Bank())->rate("USD", "USD"))->toEqual(1);
    });

    test("mixed addition", function () {
        $fiveBucks = Money::dollar(5);
        $tenFrancs = Money::franc(10);
        $bank = new Bank();
        $bank->addRate("CHF", "USD", 2);
        $result = $bank->reduce($fiveBucks->plus($tenFrancs), "USD");
        expect($result)->toEquals(Money::dollar(10));
    });
});
