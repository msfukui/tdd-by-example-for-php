<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo\TestCaseTest;

require_once('../../../vendor/autoload.php');

use TddByExampleForPhp\PartTwo\WasRun;

final class TestCaseTest
{
    static public function testRunning(): void
    {
        $test = new WasRun("testMethod");
        assert($test->wasRun === false);
        $test->run();
        assert($test->wasRun === true);
    }
}

TestCaseTest::testRunning();