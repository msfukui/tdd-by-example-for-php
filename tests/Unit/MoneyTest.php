<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

describe("Money", function () {

    test("equality", function () {
        expect((new Franc(5))->equals(new Dollar(5)))->toBeFalse;
    });
});
