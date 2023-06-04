<?php

function tomanjerry(){
    for($i= 1; $i< 101; $i++){
        if($i%3==0 && $i%5==0){
            echo "<br>";
            echo "$i: tom&herry";
            continue;
         }
        if($i%3==0){
            echo "<br>";
            echo "$i: tom";
        }
         if($i%5==0){
            echo "<br>";
            echo "$i: Jerry";
         }
        
    }
}
//tomanjerry();

$x= 5;
echo "<br>";
echo $x+++$x++;
echo "<br>";
echo $x;
echo "<br>";
echo $a = $x---$x--;
echo "<br>";
echo $x;

die;
$arr = [5,6,7,8,9,10,1,2,3,4];
function bimarySearch($arr){
    //$arr[] = sort($arr);
    $item = 5;
    $start = 0;
    $end = count($arr);
    $flag = true;
    while($flag){
    $mid =ceil(($start+$end)/2);
  if($item == $arr[$mid]){
    $flag = false;
    return  "index is: ".$mid." and element: ".$arr[$mid];
  }elseif($item < $arr[$mid]){
    $end = $mid;
  }else{
    $start = $mid;
  }
}
}

//echo bimarySearch($arr);






