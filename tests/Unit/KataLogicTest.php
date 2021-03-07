<?php

declare(strict_types=1);

namespace TruckKataTests\Unit;

use PHPUnit\Framework\TestCase;
use TruckKata\KataLogic;
use TruckKata\ValueObject\Box;
use TruckKata\ValueObject\Truck;
use TruckKata\ValueObject\TruckSize;
use TruckKata\ValueObject\UnitPerBox;

final class KataLogicTest extends TestCase
{
    public function testCalculateMaximumUnitsExample1(): void
    {
        $kataLogic = new KataLogic();

        $boxes = [new Box(1), new Box(2), new Box(3)];
        $unitsPerBox = [new UnitPerBox(3), new UnitPerBox(2), new UnitPerBox(1)];
        $truckSize = new TruckSize(3);

        $truck = new Truck($boxes, $unitsPerBox, $truckSize);

        self::assertSame(7, $kataLogic->calculateMaximumUnits($truck));
    }
}
