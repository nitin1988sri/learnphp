<?php
ini_set("display_error",1);

//  Given an array arr[] of integers. Find a peak element i.e. an element that is not smaller than its neighbors. 

// Note: For corner elements, we need to consider only one neighbor. 

// Example:

// Input: array[]= {5, 10, 20, 15}
// Output: 20
// Explanation: The element 20 has neighbors 10 and 15, both of them are less than 20.

// Input: array[] = {10, 20, 15, 2, 23, 90, 67}
// Output: 20 or 90
// Explanation: The element 20 has neighbors 10 and 15, both of them are less than 20, similarly 90 has neighbors 23 and 67.

$i = 5;
echo $i+++$i++;
echo $i;
echo $i---$i--;
echo $i;

$array = [5, 10, 20, 15];
function rvereseArray(&$arr, $start,
                       $end)
{
    while ($start < $end)
    {
        $temp = $arr[$start];
        $arr[$start] = $arr[$end];
        $arr[$end] = $temp;
        $start++;
        $end--;
    }
}    
rvereseArray($array,0,3);
print_r($array);
$temp = [];
for($i=1; $i<count($array)-1; $i++){
   if(($array[$i-1] < $array[$i]) && ($array[$i] > $array[$i+1])){
    $temp[] = $array[$i]; 
   }
}
print_r($temp);