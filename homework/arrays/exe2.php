<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

function average($numbers) {
    return array_sum($numbers) / count($numbers);
}

echo average($numbers);