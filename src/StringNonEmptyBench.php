<?php

declare(strict_types=1);

namespace Vjik\PhpEmptyBench;

/**
 * @Iterations(20)
 * @Revs(1000000)
 */
final class StringNonEmptyBench
{
    private string $value = 'q1w2e3r4t5y6u7i8o9p0';

    public function benchEmpty(): void
    {
        if (empty($this->value));
    }

    public function benchStrictEqual(): void
    {
        if ($this->value === '');
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
