<?php

$desiredSum = readline('Enter desired sum');

$sum = 0;

while ($desiredSum != $sum) {

    $dice1 = rand(1,6);
    $dice2 = rand(1,6);
    $sum = $dice1 + $dice2;

    echo PHP_EOL, $dice1 . ' and ' . $dice2 . ' = ' . $sum;
}
