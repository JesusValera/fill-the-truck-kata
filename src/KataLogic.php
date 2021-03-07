<?php

declare(strict_types=1);

namespace TruckKata;

use TruckKata\ValueObject\Truck;

final class KataLogic
{
    /**
     * @return int Return an integer representing the maximum units that can be carried by truck.
     */
    public function calculateMaximumUnits(Truck $truck): int
    {
        $products = [];

        foreach ($truck->boxes() as $i => $box) {
            $unitPerBox = $truck->unitsPerBox()[$i];
            $products[] = array_fill(0, $box->productNumber(), $unitPerBox->unitNumber());
        }

        return $this->calculate($truck, $products);
    }

    private function calculate(Truck $truck, array $products): int
    {
        return array_reduce(
            $this->selectProductsFromTruckSize($products, $truck),
            static fn (int $carry, int $productNumber): int => $carry + $productNumber,
            0
        );
    }

    private function selectProductsFromTruckSize(array $products, Truck $truck): array
    {
        $flatProducts = array_merge(...$products);

        return array_splice($flatProducts, 0, $truck->truckSize()->size());
    }
}
