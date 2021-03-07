<?php

declare(strict_types=1);

namespace TruckKata\ValueObject;

use RuntimeException;

final class Box
{
    private int $productNumber;

    public function __construct(int $productNumber)
    {
        $this->guardProductNumber($productNumber);
        $this->productNumber = $productNumber;
    }

    public function productNumber(): int
    {
        return $this->productNumber;
    }

    private function guardProductNumber(int $productNumber): void
    {
        if ($productNumber < 0 || $productNumber > (10 ** 7)) {
            throw new RuntimeException('1 <= boxes[i] <= 10^7');
        }
    }
}
