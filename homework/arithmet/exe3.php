<?php

$number = 0;
$lowerBound = 1;
$upperBound = 100;


for ($i = $lowerBound; $i <= $upperBound; ++$i){
    $number = $number + $i;
} echo "The sum of " . $lowerBound ." to " . $upperBound . " is " . $number;
$average = $number / $upperBound;
 echo PHP_EOL, "The avarage is " . $average;


