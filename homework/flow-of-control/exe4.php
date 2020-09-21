<?php

$day = readline();

switch ($day) {
    case "1":
        echo "Monday";
        break;
    case "2":
        echo "Tuesday";
        break;
    case "3":
        echo "Thursday";
        break;
    case "4":
        echo "Wednesday";
        break;
    case "5":
        echo "Friday";
        break;
    case "6":
        echo "Saturday";
        break;
    case "3":
        echo "Sunday";
        break;
    default:
        echo "Not a valid day";
}

