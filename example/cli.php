#!/usr/local/bin/php
<?php

declare(strict_types=1);

use TruckKata\KataLogic;
use TruckKata\ValueObject\Truck;

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

$boxes = [1, 2, 3];
$unitsPerBox = [3, 2, 1];
$truckSize = 3;

$truck = new Truck($boxes, $unitsPerBox, $truckSize);

$output = $kataLogic->calculateMaximumUnits($truck);

echo "The output is {$output}" . PHP_EOL;
