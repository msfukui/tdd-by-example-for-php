<?php

declare (strict_types = 1);

namespace TddByExampleForPhp;

describe('Calculator#sum', function () {
   it('may sum integers', function () {
       $result = Calculator::sum(1, 2);
 
       expect($result)->toBe(3);
   });

   it('may sum floats', function () {
       $result = Calculator::sum(1.5, 2.5);
 
       expect($result)->toBe(4.0);
   });
});
