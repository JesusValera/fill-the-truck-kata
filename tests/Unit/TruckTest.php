<?php

declare(strict_types=1);

namespace TruckKataTests\Unit;

use PHPUnit\Framework\TestCase;
use RuntimeException;
use TruckKata\ValueObject\Box;
use TruckKata\ValueObject\Truck;
use TruckKata\ValueObject\TruckSize;
use TruckKata\ValueObject\UnitPerBox;

final class TruckTest extends TestCase
{
    public function test_construct_truck(): void
    {
        new Truck([new Box(1)], [new UnitPerBox(1)], new TruckSize(1));
        self::assertTrue(true);
    }

    public function test_product_number_is_invalid(): void
    {
        $this->expectException(RuntimeException::class);
        new Truck([], [], new TruckSize(1));
    }

    public function test_size_arrays_not_equal(): void
    {
        $this->expectException(RuntimeException::class);
        new Truck([new Box(1)], [], new TruckSize(1));
    }
}
