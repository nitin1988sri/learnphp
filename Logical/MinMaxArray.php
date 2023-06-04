<?php

$arr = [3,6,1,7,2,9,0,-1,19];

$maxMin = function ($arr){
     $max= $arr[0];
     $min = $arr[0];
    for($i=0; $i<count($arr)-1; $i++){
        if($arr[$i+1] > $max){
            $max = $arr[$i+1];
        }
        else{
            $min = $arr[$i+1];
        }
    }
    echo 'Max: '.$max." ", 'Min: '.$min;
};

$maxMin($arr);

