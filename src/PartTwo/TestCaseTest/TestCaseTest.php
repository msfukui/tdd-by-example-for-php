<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo\TestCaseTest;

require_once('../../../vendor/autoload.php');

use TddByExampleForPhp\PartTwo\WasRun;
use TddByExampleForPhp\PartTwo\TestCase;

final class TestCaseTest extends TestCase
{
    public function testRunning(): void
    {
        $test = new WasRun("testMethod");
        assert($test->wasRun === false);
        $test->run();
        assert($test->wasRun === true);
    }
}

$testCaseTest = new TestCaseTest("testRunning");
$testCaseTest->run();
