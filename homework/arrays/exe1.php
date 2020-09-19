<?php


$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];
//todo
//echo "Original numeric array: ";

foreach($numbers as $number){
    echo $number . " ";
}
//todo
//echo "Sorted numeric array: ";

$sorted = sort($numbers);

foreach($numbers as $sorted){
    echo $sorted . " ";
}


$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

foreach($words as $word){
    echo $word . " ";
}

//todo
//echo "Original string array: ";

//todo
//echo "Sorted string array: ";

$sortedWords = sort($words);

foreach($words as $sortedWords){
    echo $sortedWords . " ";
}


