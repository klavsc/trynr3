<?php

$firstWord = readline('Enter first word: ');
$secondWord = readline('Enter second word: ');

$count = strlen($firstWord) + strlen($secondWord);
$dot = "";

if ($count <= 30 ) {

    $dots = 30 - $count;

    for ($i = 1; $i <= $dots; $i++) {

        $dot .= ".";
    }
}

echo $firstWord . $dot . $secondWord;

