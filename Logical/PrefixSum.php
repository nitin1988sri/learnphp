<?php
$arr = [10, 20, 10, 5, 15];
$preArr = [];
for($i=1; $i< count($arr); $i++){

   $arr[$i] = $arr[$i]+$arr[$i-1];
}
print_r($arr);
