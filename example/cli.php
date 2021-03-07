#!/usr/local/bin/php
<?php

declare(strict_types=1);

use TruckKata\KataLogic;
use TruckKata\ValueObject\Box;
use TruckKata\ValueObject\Truck;
use TruckKata\ValueObject\TruckSize;
use TruckKata\ValueObject\UnitPerBox;

require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Example 1
 * ---------
 * Input:
 * num = 3
 * boxes = [1, 2, 3]
 * unitSize = 3
 * unitsPerBox = [3, 2, 1]
 * truckSize = 3
 *
 * Output: 7
 */
$kataLogic = new KataLogic();

$boxes = [new Box(1), new Box(2), new Box(3)];
$unitsPerBox = [new UnitPerBox(3), new UnitPerBox(2), new UnitPerBox(1)];
$truckSize = new TruckSize(3);

$truck = new Truck($boxes, $unitsPerBox, $truckSize);

$output = $kataLogic->calculateMaximumUnits($truck);

echo "The output is {$output}" . PHP_EOL;
