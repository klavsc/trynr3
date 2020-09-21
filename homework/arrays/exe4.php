<?php

$array1 = [];
$array2 = [];


for ($i = 1; $i <= 10; $i++) {

    $random = rand(1, 100);
    $array1 [] = $random;

}
$array2 = $array1;
$arrayLength = array_key_last($array1);
$array1[$arrayLength] = -7;

echo 'Array 1: ';

foreach ($array1 as $array) {
    echo $array . ' ';
}

echo PHP_EOL;

echo 'Array 2: ';

foreach ($array2 as $array) {
    echo $array . ' ';
}






