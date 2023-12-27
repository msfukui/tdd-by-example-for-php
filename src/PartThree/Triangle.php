<?php

declare(strict_types=1);

namespace TddByExampleForPhp\PartThree;

use Exception;

// c.f. https://ja.wikipedia.org/wiki/%E4%B8%89%E8%A7%92%E5%BD%A2
final class Triangle
{
    /**
     * @throws Exception
     */
    public static function evaluate(int $line1, int $line2, int $line3): int
    {
        if ($line1 <= 0 || $line2 <= 0 || $line3 <= 0) {
            throw new Exception('辺の長さには 0 より大きい数値を指定してください');
        }
        if ($line1 + $line2 <= $line3 || $line2 + $line3 <= $line1 || $line3 + $line1 <= $line2) {
            throw new Exception('辺の長さが他の二辺の長さの和以上になっています');
        }
        if ($line1 === $line2 && $line2 === $line3) {
            return 1;
        } elseif ($line1 === $line2 || $line2 === $line3 || $line3 === $line1) {
            return 2;
        }
        return 3;
    }
}
