<?php

declare(strict_types=1);

namespace Vjik\PhpEmptyBench;

/**
 * @Iterations(20)
 * @Revs(1000000)
 */
final class ArrayEmptyBench
{
    private array $value = [];

    public function benchEmpty(): void
    {
        empty($this->value);
    }

    public function benchStrictEqual(): void
    {
        $this->value === [];
    }
}
