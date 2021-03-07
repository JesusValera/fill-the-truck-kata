<?php

declare(strict_types=1);

namespace TruckKata\ValueObject;

use RuntimeException;

final class UnitPerBox
{
    private int $unitNumber;

    public function __construct(int $unitNumber)
    {
        $this->guardProductNumber($unitNumber);
        $this->unitNumber = $unitNumber;
    }

    public function unitNumber(): int
    {
        return $this->unitNumber;
    }

    private function guardProductNumber(int $productNumber): void
    {
        if ($productNumber < 0 || $productNumber > (10 ** 5)) {
            throw new RuntimeException('1 <= boxes[i] <= 10^5');
        }
    }
}
