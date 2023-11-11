<?php

declare (strict_types = 1);

describe('#sum', function () {
   it('may sum integers', function () {
       $result = sum(1, 2);
 
       expect($result)->toBe(3);
   });

   it('may sum floats', function () {
       $result = sum(1.5, 2.5);
 
       expect($result)->toBe(4.0);
   });
});

function sum(int|float $a, int|float $b): int|float
{
   return $a + $b;
}
