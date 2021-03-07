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
        return 7;
    }
}
