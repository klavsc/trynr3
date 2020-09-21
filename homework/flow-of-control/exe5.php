<?php

$nokia = readline('Enter a string');
$length = strlen($nokia);

$start = 0;
$number = [];

for ($i = 0; $i < $length; $i++) {


    $keypad = substr ( $nokia ,0 , $length ) ;

    if ($keypad == 'a' || $keypad == 'b' || $keypad == 'c') {
        $s = 2;
        $number [] = $s;
    } elseif ($keypad == 'd' || $keypad == 'e' || $keypad == 'f') {
        $s = 3;
        $number [] = $s;
    } elseif ($keypad == 'g' || $keypad == 'h' || $keypad == 'i') {
        $s = 3;
        $number [] = $s;
    } elseif ($keypad == 'j' || $keypad == 'k' || $keypad == 'l') {
        $s = 3;
        $number [] = $s;
    } elseif ($keypad == 'm' || $keypad == 'n' || $keypad == 'o') {
        $s = 3;
        $number [] = $s;
    } elseif ($keypad == 'p' || $keypad == 'q' || $keypad == 'r' || $keypad == 's') {
        $s = 3;
        $number [] = $s;
    } elseif ($keypad == 't' || $keypad == 'u' || $keypad == 'v') {
        $s = 3;
        $number [] = $s;
    } elseif($keypad == 'w' || $keypad == 'x' || $keypad == 'y' || $keypad == 'z') {
        $s = 3;
        $number [] = $s;
    } else {
        echo 'Invalid input';
    }
    foreach ($number as $numbers) {
        echo $numbers;
    }

}

