<?php

declare(strict_types=1);

namespace TruckKata\ValueObject;

use RuntimeException;

final class Truck
{
    /**
     * @var Box[] a list of integers representing the number of available boxes for products
     */
    private array $boxes;

    /**
     * @var UnitPerBox[] a list of integers representing the number of units packed in each box
     */
    private array $unitsPerBox;

    /**
     * @var TruckSize an integer representing the number of boxes the truck can carry.
     */
    private TruckSize $truckSize;

    public function __construct(array $boxes, array $unitsPerBox, TruckSize $truckSize)
    {
        $this->guardBoxesSize($boxes);
        $this->guardSizesOfArrays($boxes, $unitsPerBox);
        $this->boxes = $boxes;
        $this->unitsPerBox = $unitsPerBox;
        $this->truckSize = $truckSize;
    }

    /**
     * @return Box[]
     */
    public function boxes(): array
    {
        return $this->boxes;
    }

    /**
     * @return UnitPerBox[]
     */
    public function unitsPerBox(): array
    {
        return $this->unitsPerBox;
    }

    public function truckSize(): TruckSize
    {
        return $this->truckSize;
    }

    private function guardBoxesSize(array $boxes): void
    {
        $boxesSize = count($boxes);

        if ($boxesSize < 1 || $boxesSize > (10 ** 5)) {
            throw new RuntimeException('1 <= |boxes| <= 10^5');
        }
    }

    private function guardSizesOfArrays(array $boxes, array $unitsPerBox): void
    {
        if (count($boxes) !== count($unitsPerBox)) {
            throw new RuntimeException('|boxes| == |unitsPerBox|');
        }
    }
}
