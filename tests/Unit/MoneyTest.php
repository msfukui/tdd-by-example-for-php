<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

describe("Money", function () {

    test("equality", function () {
        expect((Money::Franc(5))->equals(Money::dollar(5)))->toBeFalse;
    });

    test("currency", function () {
        expect(Money::dollar(1)->currency())->toBe("USD");
        expect(Money::franc(1)->currency())->toBe("CHF");
    });
});