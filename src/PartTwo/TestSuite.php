<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartTwo;

class TestSuite
{
    /**
     * @var $tests TestCase[]
     */
    private array $tests = [];

    public function add(TestCase $test): void
    {
        $this->tests[] = $test;
    }

    public function run(TestResult $result): void
    {
        foreach ($this->tests as $test) {
            $test->run($result);
        }
    }
}
