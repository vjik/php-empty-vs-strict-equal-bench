<?php

declare(strict_types=1);

namespace Vjik\PhpEmptyBench;

use stdClass;

/**
 * @Iterations(20)
 * @Revs(1000000)
 */
final class ObjectNullBench
{
    private ?stdClass $value = null;

    public function benchEmpty(): void
    {
        empty($this->value);
    }

    public function benchStrictEqual(): void
    {
        $this->value === null;
    }

    public function benchTypecastBool(): void
    {
        (bool) $this->value;
    }
}
