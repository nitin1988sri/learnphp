<?php
$str = 'saurabh';
$revers= '';
$i=0;
while(@$str[$i]!=null){
    $revers = $str[$i].$revers;
    $i++; 
}
//echo $revers;


$num = 1234;
$rev=0;
while($num!=0){
 $rev = ($rev*10)+$num%10;
  $num = (int) ($num/10);
}
echo  $rev;



$arr = [10, 20, 20, 10, 10, 20, 5, 20];
$returnArr=[];
for($i=0;$i<count($arr);$i++){
    $cout = 0;
    if(!array_key_exists($arr[$i],$returnArr)){
        for($j=$i; $j<count($arr);$j++){
            if($arr[$i] == $arr[$j]){
                $cout++;
            }
        }
        $returnArr[$arr[$i]] = $cout;
    }
}
print_r($returnArr);