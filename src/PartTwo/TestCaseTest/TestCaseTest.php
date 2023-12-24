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

    private TestResult $result;

    public function setUp(): void {
        $this->result = new TestResult();
    }
    public function testTemplateMethod(): void
    {
        $this->test = new WasRun("testMethod");
        $this->test->run($this->result);
        assert("1 run, 0 failed" === $this->result->summary());
    }

    public function testResult(): void
    {
        $this->test = new WasRun("testMethod");
        $this->test->run($this->result);
        assert("1 run, 0 failed" === $this->result->summary());
    }

    public function testFailedResult(): void
    {
        $this->test = new WasRun("testBrokenMethod");
        $this->test->run($this->result);
        assert("1 run, 1 failed" === $this->result->summary());
    }

    public function testFailedResultFormatting(): void
    {
        $this->result->testStarted();
        $this->result->testFailed();
        assert("1 run, 1 failed" === $this->result->summary());
    }

    public function testSuite(): void
    {
        $suite = new TestSuite();
        $suite->add(new WasRun("testMethod"));
        $suite->add(new WasRun("testBrokenMethod"));
        $suite->run($this->result);
        assert("2 run, 1 failed" === $this->result->summary());
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
