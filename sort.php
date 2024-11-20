<?php

function Sorts($array, $type)
{
    foreach ($array as $num) {
        if (!is_numeric($num)) {
            return "Please make sure the array only contains numbers.";
        }
    }

    if ($type == "asc") {
        for ($i = 0; $i < count($array) - 1; $i++) {
            for ($j = 0; $j < count($array) - 1 - $i; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        return implode(" ", $array);
    }
    else if ($type == "desc") {
        for ($i = 0; $i < count($array) - 1; $i++) {
            for ($j = 0; $j < count($array) - 1 - $i; $j++) {
                if ($array[$j] < $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        return implode(" ", $array);
    }

    return false;
}

$Array = [64, 234, 25, 120.5, 22, 11, 90];
echo Sorts($Array, 'desc');


