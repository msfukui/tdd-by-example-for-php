<?php

declare(strict_types=1);

namespace TddByExampleForPhp;

describe("Sum", function () {

    test("sum plus money", function () {
        $fiveBucks = Money::dollar(5);
        $tenFrancs = Money::franc(10);
        $bank = new Bank();
        $bank->addRate("CHF", "USD", 2);
        $sum = (new Sum($fiveBucks, $tenFrancs))->plus($fiveBucks);
        $result = $bank->reduce($sum, "USD");
        expect($result)->toEquals(Money::dollar(15));
    });

    test("sum times", function () {
        $fiveBucks = Money::dollar(5);
        $tenFrancs = Money::franc(10);
        $bank = new Bank();
        $bank->addRate("CHF", "USD", 2);
        $sum = (new Sum($fiveBucks, $tenFrancs))->times(2);
        $result = $bank->reduce($sum, "USD");
        expect($result)->toEquals(Money::dollar(20));
    });
});
