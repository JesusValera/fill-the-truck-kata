<?php

declare(strict_types=1);

namespace Kata;

final class KataLogic
{
    public function add(int ...$numbers): int
    {
        return array_sum($numbers);
    }
}
