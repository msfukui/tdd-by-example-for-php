<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

describe("Money", function () {

    test("equality", function () {
        expect((Money::Franc(5))->equals(Money::dollar(5)))->toBeFalse;
    });
});
