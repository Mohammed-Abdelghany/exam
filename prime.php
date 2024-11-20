<?php
function Prime($number)
{
    if ($number <= 1) {
        return false;
    }
    if ($number == 2 || $number == 3) {
        return true;
    }
    if ($number % 2 == 0 || $number % 3 == 0) {

        return false;
    }

    for ($i = 5; $i <= $number; $i+=2) {
        if ($number % $i == 0) {
            return false;
        }
}
    return true;
}
$number = 55;
if (Prime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}

