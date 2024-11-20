<?php
function avg($array)
{
    $result = 0;
    if (gettype($array) == "array"){
        foreach ($array as  $value) {
        if(is_numeric($value)){
                 $result += $value;
                }
        else{
                 return "error input";

            }

            }
                return $result/count($array);

    }
    else{
        return "error input";
    }

}

$array=[2,3,4,5,6,7,8,9];
echo avg($array);