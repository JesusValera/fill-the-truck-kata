#!/usr/local/bin/php
<?php

declare(strict_types=1);

use Kata\KataLogic;

require dirname(__DIR__) . '/vendor/autoload.php';

$kataLogic = new KataLogic();

$sum = $kataLogic->add(1, 2, 3);
echo "The sum: {$sum}" . PHP_EOL;
