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
        if (empty($this->value));
    }

    public function benchStrictEqual(): void
    {
        if ($this->value === null);
    }

    public function benchTypecastBool(): void
    {
        if ((bool) $this->value);
    }

    public function benchRaw(): void
    {
        if ($this->value);
    }
}
