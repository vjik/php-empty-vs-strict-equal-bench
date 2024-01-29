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
