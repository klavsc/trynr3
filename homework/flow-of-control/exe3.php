<?php
$n1 =12345;
$count = 0;
while ($n1 != 0)
{
    $n1 = $n1 / 10;
    $n1 = intval($n1);
    ++$count;
}
echo "The Digit in a Number: ".$count;