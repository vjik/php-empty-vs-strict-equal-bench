<?php

declare(strict_types=1);

namespace Vjik\PhpEmptyBench;

/**
 * @Iterations(20)
 * @Revs(1000000)
 */
final class IntegerNonEmptyBench
{
    private ?int $value = 42;

    public function benchEmpty(): void
    {
        empty($this->value);
    }

    public function benchStrictEqual(): void
    {
        $this->value === null;
    }
}
