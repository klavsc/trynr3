<?php


$input1 = (int) readline("Enter Number 1: ");
$input2 = (int) readline("Enter Number 2: ");

if($input1 == 15 || $input2 == 15 || $input1 + $input2 == 15 || $input1 - $input2 == 15){
    echo "true";
} else {
    echo "false";
}
