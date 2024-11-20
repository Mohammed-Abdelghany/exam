<?php
$array=[10,12,16,0,-2];


function RemoveEven ($array)
{
    $result=[];
    $evenarray=[];
if(gettype($array)=="array"){
    foreach($array as $value){
        if(!($value%2==0)) {
            $result[] = $value;
        }else{
            $evenarray[] = $value;
        }
    }
    if(!empty($result)){

    return "array without even numbers is"."<br>"."[".implode(",",$result)."]"."<br>"."even array is"."<br>"."[".implode(",",$evenarray)."]";

    }
    else{
        return "all numbers in array are even"."<br>"."[".implode(",",$evenarray)."]";


    }
}
else{
    return "error in data type";
}

};
print_r(RemoveEven($array));

