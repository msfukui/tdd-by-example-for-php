<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo\TestCaseTest;

require_once('../../../vendor/autoload.php');

use TddByExampleForPhp\PartTwo\WasRun;
use TddByExampleForPhp\PartTwo\TestCase;

final class TestCaseTest extends TestCase
{
    private WasRun $test;

    public function setUp(): void
    {
        $this->test = new WasRun("testMethod");
    }

    public function testRunning(): void
    {
        $this->test->run();
        assert($this->test->wasRun === true);
    }

    public function testSetUp(): void
    {
        $this->test->run();
        assert($this->test->wasSetUp === true);
    }
}

$testCaseTestRunning = new TestCaseTest("testRunning");
$testCaseTestRunning->run();
$testCaseTestSetUp = new TestCaseTest("testSetUp");
$testCaseTestSetUp->run();
