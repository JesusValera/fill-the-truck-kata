<?php

declare(strict_types=1);

namespace TruckKata\ValueObject;

use RuntimeException;

final class TruckSize
{
    private int $size;

    public function __construct(int $size)
    {
        $this->guardSize($size);
        $this->size = $size;
    }

    public function size(): int
    {
        return $this->size;
    }

    private function guardSize(int $size): void
    {
        if ($size < 1 || $size > (10 ** 8)) {
            throw new RuntimeException('1 <= truckSize <= 10^8');
        }
    }
}
