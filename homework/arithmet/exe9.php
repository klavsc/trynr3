<?php


$weight = (int) readline("Enter Weight: ");
$height = (int) readline ("Enter Height: ");

$BMI = $weight * 703 / ($height * $height);

echo $BMI;