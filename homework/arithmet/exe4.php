<?php

function factorial($n)
{
    if ($n == 0)
        return 1;
    return $n * factorial($n - 1);
}
for ($i = 1; $i <= 10; ++$i){
    echo PHP_EOL, "Factorial of ", $i, " is ", factorial($i);
}


