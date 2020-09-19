<?php
echo 'Welcome to Piglet!';
echo 'Would you like to Play';


$dice = 0;
$score = 0;

$lastResult = 0;

while ($dice !== 1) {


    $dice = rand(1, 6);
    $lastResult += $dice;

    $choice = readline();
    if ($dice == 1){
        echo "You lost! Score 0";
        break;
    }


    if ($choice == 'Yes'){

        echo 'You rolled a' . $dice . 'Would you like to roll again?';
    } elseif ($choice == 'No'){
        echo 'Your score is  ' . $lastResult;
    }

}

echo PHP_EOL;



