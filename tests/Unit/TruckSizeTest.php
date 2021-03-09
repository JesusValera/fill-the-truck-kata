<?php

declare(strict_types=1);

namespace TruckKataTests\Unit;

use Generator;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use TruckKata\ValueObject\TruckSize;

final class TruckSizeTest extends TestCase
{
    /**
     * @dataProvider dataProviderValidSize
     */
    public function test_size_is_valid(int $size): void
    {
        new TruckSize($size);
        self::assertTrue(true);
    }

    public function dataProviderValidSize(): Generator
    {
        yield '1' => [
            1,
        ];

        yield '100_000_000' => [
            10 ** 8,
        ];
    }

    /**
     * @dataProvider dataProviderInvalidSize
     */
    public function test_size_is_invalid(int $size): void
    {
        $this->expectException(RuntimeException::class);
        new TruckSize($size);
    }

    public function dataProviderInvalidSize(): Generator
    {
        yield '0' => [
            0,
        ];

        yield '-1' => [
            -1,
        ];

        yield '10_000_001' => [
            100_000_001,
        ];
    }
}
