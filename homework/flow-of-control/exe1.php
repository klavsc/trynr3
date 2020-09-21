<?php

$input1 = readline('NR1: ');
$input2 = readline('NR2: ');
$input3 = readline('NR3: ');

if ($input1 > $input2 && $input1 > $input3)
{
    echo 'Biggest number is: ' . $input1;
}
if ($input2 > $input3 && $input2 > $input1)
{
    echo 'Biggest number is: ' . $input2;
}
if ($input3 > $input1 && $input3 > $input2)
{
    echo 'Biggest number is: ' . $input3;
}


