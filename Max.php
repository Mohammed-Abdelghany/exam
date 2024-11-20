<?php
function MaxNum($array)

{
    $result = 0;
    $max = 0;
    if(is_array($array)){
        foreach($array as $num){
            if(is_numeric($num)){
                if($num > $max){
                 $result = $num;
                }
                
            }
            else{
                return "pls sure that the inputs is numbers";
            }
            
        }
        return $result;
    }
 
        else{
    return "pls sure that the inputs is numbers";
}
}
$array=[10,20,30];
echo MaxNum($array);