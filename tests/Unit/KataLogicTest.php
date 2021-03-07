<?php

declare(strict_types=1);

namespace TruckKataTests\Unit;

use PHPUnit\Framework\TestCase;
use TruckKata\KataLogic;
use TruckKata\ValueObject\Truck;

final class KataLogicTest extends TestCase
{
    public function testCalculateMaximumUnitsExample1(): void
    {
        $kataLogic = new KataLogic();

        $boxes = [1, 2, 3];
        $unitsPerBox = [3, 2, 1];
        $truckSize = 3;

        $truck = new Truck($boxes, $unitsPerBox, $truckSize);

        self::assertSame(7, $kataLogic->calculateMaximumUnits($truck));
    }
}
