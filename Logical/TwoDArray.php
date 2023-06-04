<?php
//     [ 2 4 6
//       8, 10, 12
//       14, 16, 18
//      ]

$table = [10,5,2];
$TwoDArr= [];
for($i=0; $i<3; $i++){
    $num = 1;
    for($j=0; $j<3; $j++){
      $TwoDArr[$i][$j] = $table[$i] * $num;
      $num++ ;
    }
}
echo "<pre>";
print_r($TwoDArr);
for($i=0; $i<3; $i++){
    $num = 1;
    for($j=1; $j<=2; $j++){
      $TwoDArr[$i][$j] = $TwoDArr[$i][$j-1] + $TwoDArr[$i][$j];
    }
}
print_r($TwoDArr);
