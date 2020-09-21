<?php

$minimumWage = 8.0;
$maxHours = 60;
$basePay = 0;
$hoursWorked = 0;
$overTime = 1.5;


for ($i = 1; $i <= 3; $i++) {

    $basePay = (int)readline("Base pay : ");
    $hoursWorked =  (int)readline("Hours :");


    if ($basePay < $minimumWage || $hoursWorked > $maxHours) {
        echo PHP_EOL, "Error";
    } else {

        if ($hoursWorked > $maxHours) {
            $salary = $basePay * $maxHours + $overTime * $basePay * ($hoursWorked - $maxHours);
        } else {
            $salary = $basePay * $hoursWorked;
            echo PHP_EOL, "Salary : " . $salary;
        }
    }
}

