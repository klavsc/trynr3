<?php

$choice = 0;

$secretNumber = rand(1, 100);

while ($choice !== $secretNumber) {

    echo "I'm thinking of a number between 1-100.  Try to guess it.";
    $choice = (int)readline();


    if ($secretNumber > $choice) {
        echo 'Sorry, you are too low.  I was thinking of ' . $secretNumber;
        break;
    } elseif ($secretNumber < $choice) {
        echo 'Sorry, you are too high.  I was thinking of' . $secretNumber;
        break;
    } else {
        echo 'You guessed it!  What are the odds?!?';
        break;
    }
}
echo PHP_EOL;