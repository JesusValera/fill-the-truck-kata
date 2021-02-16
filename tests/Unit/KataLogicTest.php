<?php

declare(strict_types=1);

namespace KataTests\Unit;

use Generator;
use Kata\KataLogic;
use PHPUnit\Framework\TestCase;

final class KataLogicTest extends TestCase
{
    /**
     * @dataProvider addDataProvider
     */
    public function testAdd(int $expected, array $numbers): void
    {
        $kataLogic = new KataLogic();

        self::assertSame($expected, $kataLogic->add(...$numbers));
    }

    public function addDataProvider(): Generator
    {
        yield 'when no numbers, the result is zero' => [
            'expected' => 0,
            'numbers' => [],
        ];

        yield 'when a single number, the result is the same number' => [
            'expected' => 1,
            'numbers' => [1],
        ];

        yield 'when two numbers, the result is the sum of both' => [
            'expected' => 3,
            'numbers' => [1, 2],
        ];

        yield 'when multiple numbers, the result is the sum of all of them' => [
            'expected' => 10,
            'numbers' => [1, 2, 3, 4],
        ];
    }
}
