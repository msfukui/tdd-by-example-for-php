<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo\TestCaseTest;

require_once('../../../vendor/autoload.php');

use TddByExampleForPhp\PartTwo\WasRun;
use TddByExampleForPhp\PartTwo\TestCase;

final class TestCaseTest extends TestCase
{
    private WasRun $test;

    public function testTemplateMethod(): void
    {
        $this->test = new WasRun("testMethod");
        $this->test->run();
        assert("setUp testMethod tearDown " === $this->test->log);
    }
}

$testCaseTestSetUp = new TestCaseTest("testTemplateMethod");
$testCaseTestSetUp->run();
