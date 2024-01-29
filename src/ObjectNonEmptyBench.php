<?php

declare(strict_types=1);

namespace Vjik\PhpEmptyBench;

use stdClass;

/**
 * @Iterations(20)
 * @Revs(1000000)
 */
final class ObjectNonEmptyBench
{
    private ?stdClass $value = null;

    public function __construct()
    {
        $this->value = new stdClass();
        $this->value->a = 1;
        $this->value->b = 2;
        $this->value->c = 3;
        $this->value->d = 4;
        $this->value->e = 5;
    }

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
