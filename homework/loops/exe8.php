<?php


$min = 1;
$max = 5;
$difference = $max - $min;

for ($i = 0; $i <= $difference; $i++) {

    for ($j = 0; $j <= $difference; $j++) {
        echo ($j+$i)%($difference) + $min;
    }
    echo PHP_EOL;
}