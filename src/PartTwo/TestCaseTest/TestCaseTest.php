<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo\TestCaseTest;

require_once('../../../vendor/autoload.php');

use TddByExampleForPhp\PartTwo\TestCase;
use TddByExampleForPhp\PartTwo\WasRun;

final class TestCaseTest extends TestCase
{
    private WasRun $test;

    public function testTemplateMethod(): void
    {
        $this->test = new WasRun("testMethod");
        $result = $this->test->run();
        assert("1 run, 0 failed" === $result->summary());
    }

    public function testFailedResult(): void
    {
        $this->test = new WasRun("testBrokenMethod");
        $result = $this->test->run();
        assert("1 run, 1 failed" === $result->summary());
    }
}

$testCaseTestSetUp = new TestCaseTest("testTemplateMethod");
$testCaseTestSetUp->run();
$testCaseTestSetUp = new TestCaseTest("testFailedResult");
$testCaseTestSetUp->run();
