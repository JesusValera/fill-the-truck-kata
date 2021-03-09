<?php

declare(strict_types=1);

namespace TruckKataTests\Unit;

use Generator;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use TruckKata\ValueObject\Box;

final class BoxTest extends TestCase
{
    /**
     * @dataProvider dataProviderValidProductNumber
     */
    public function test_product_number_is_valid(int $productNumber): void
    {
        new Box($productNumber);
        self::assertTrue(true);
    }

    public function dataProviderValidProductNumber(): Generator
    {
        yield '1' => [
            1,
        ];

        yield '10_000_000' => [
            10 ** 7,
        ];
    }

    /**
     * @dataProvider dataProviderInvalidProductNumber
     */
    public function test_product_number_is_invalid(int $productNumber): void
    {
        $this->expectException(RuntimeException::class);
        new Box($productNumber);
    }

    public function dataProviderInvalidProductNumber(): Generator
    {
        yield '0' => [
            0,
        ];

        yield '-1' => [
            -1,
        ];

        yield '10_000_001' => [
            10_000_001,
        ];
    }
}
