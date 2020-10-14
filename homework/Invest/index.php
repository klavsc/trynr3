<?php

$investment = $_GET['investment'];


$interest = 8;
$years = $_GET['years'];
$count = 0;


while(true) {
    if($count >= $years) break;
    $count++;
    $investment = $investment*(1+$interest/100);
    if($years = $count)
        echo "Investment: " . round($investment,2);
}


?>


<html>
<body>
<form action="/" method="get">
    <label for="investment">Investment</label>
    <input type="text" id="investment" name="investment" />
    <label for="years">Years</label>
    <input type="text" id="years" name="years"/>
    <button type="submit">
        Submit
    </button>
</form>
</body>
</html>

