<?php

require_once 'RandomNumbers.php';
require_once 'SavedNumbers.php';

$SavedNumber = new SavedNumbers();
$RandomNumbers = new RandomNumbers($SavedNumber->load());


$RandomNumber = $RandomNumbers->getRandomNumber();
$avg = $RandomNumbers->getAvg();

$allNumbers = $RandomNumbers->getNumbers();

$SavedNumber->store($allNumbers);

echo 'Number: ' . $RandomNumber, PHP_EOL;
echo 'Avg: ' . number_format($avg, 2) , PHP_EOL;