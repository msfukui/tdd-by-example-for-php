<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo\TestCaseTest;

require_once('../../../vendor/autoload.php');

use TddByExampleForPhp\PartTwo\TestCase;
use TddByExampleForPhp\PartTwo\TestResult;
use TddByExampleForPhp\PartTwo\TestSuite;
use TddByExampleForPhp\PartTwo\WasRun;

final class TestCaseTest extends TestCase
{
    private WasRun $test;

    public function testTemplateMethod(): void
    {
        $this->test = new WasRun("testMethod");
        $result = new TestResult();
        $this->test->run($result);
        assert("1 run, 0 failed" === $result->summary());
    }

    public function testResult(): void
    {
        $this->test = new WasRun("testMethod");
        $result = new TestResult();
        $this->test->run($result);
        assert("1 run, 0 failed" === $result->summary());
    }

    public function testFailedResult(): void
    {
        $this->test = new WasRun("testBrokenMethod");
        $result = new TestResult();
        $this->test->run($result);
        assert("1 run, 1 failed" === $result->summary());
    }

    public function testFailedResultFormatting(): void
    {
        $result = new TestResult();
        $result->testStarted();
        $result->testFailed();
        assert("1 run, 1 failed" === $result->summary());
    }

    public function testSuite(): void
    {
        $suite = new TestSuite();
        $suite->add(new WasRun("testMethod"));
        $suite->add(new WasRun("testBrokenMethod"));
        $result = new TestResult();
        $suite->run($result);
        assert("2 run, 1 failed" === $result->summary());
    }
}

$suite = new TestSuite();
$suite->add(new TestCaseTest("testTemplateMethod"));
$suite->add(new TestCaseTest("testResult"));
$suite->add(new TestCaseTest("testFailedResultFormatting"));
$suite->add(new TestCaseTest("testFailedResult"));
$suite->add(new TestCaseTest("testSuite"));
$result = new TestResult();
$suite->run($result);
print $result->summary();
