<?php

declare(strict_types=1);

namespace TruckKata\ValueObject;

final class Truck
{
    /**
     * @var int[] a list of integers representing the number of available boxes for products
     */
    private array $boxes;

    /**
     * @var int an integer representing the number of products
     */
    private int $num;

    /**
     * @var int an integer representing size of unitsPerBox
     */
    private int $unitSize;

    /**
     * @var int[] a list of integers representing the number of units packed in each box
     */
    private array $unitsPerBox;

    /**
     * @var int an integer representing the number of boxes the truck can carry.
     */
    private int $truckSize;

    public function __construct(array $boxes, array $unitsPerBox, int $truckSize)
    {
        $this->num = count($boxes);
        $this->boxes = $boxes;
        $this->unitsPerBox = $unitsPerBox;
        $this->unitSize = count($unitsPerBox);
        $this->truckSize = $truckSize;
    }

    public function boxes(): array
    {
        return $this->boxes;
    }

    public function num(): int
    {
        return $this->num;
    }

    public function unitsPerBox(): array
    {
        return $this->unitsPerBox;
    }

    public function unitSize(): int
    {
        return $this->unitSize;
    }

    public function truckSize(): int
    {
        return $this->truckSize;
    }
}
