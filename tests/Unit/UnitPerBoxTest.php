<?php

declare(strict_types=1);

namespace TruckKataTests\Unit;

use Generator;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use TruckKata\ValueObject\UnitPerBox;

final class UnitPerBoxTest extends TestCase
{
    /**
     * @dataProvider dataProviderValidUnitNumber
     */
    public function test_unit_number_is_valid(int $unitNumber): void
    {
        new UnitPerBox($unitNumber);
        self::assertTrue(true);
    }

    public function dataProviderValidUnitNumber(): Generator
    {
        yield '1' => [
            1,
        ];

        yield '100_000' => [
            10 ** 5,
        ];
    }

    /**
     * @dataProvider dataProviderInvalidUnitNumber
     */
    public function test_unit_number_is_invalid(int $unitNumber): void
    {
        $this->expectException(RuntimeException::class);
        new UnitPerBox($unitNumber);
    }

    public function dataProviderInvalidUnitNumber(): Generator
    {
        yield '0' => [
            0,
        ];

        yield '-1' => [
            -1,
        ];

        yield '10_001' => [
            100_001,
        ];
    }
}
