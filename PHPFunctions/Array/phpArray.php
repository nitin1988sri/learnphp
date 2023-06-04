<?php

$age = array("Peter"=>"35", "data"=>array("Peter1"=>"35", "Ben1"=>"37", "Joe1"=>"43"));

$newarr = [];
function changeKeyRcursive($items){
    global $newarr;
    foreach($items as $key=>$item){
        if(is_array($items[$key])){
            changeKeyRcursive($items[$key]);
        }
        else{
            $newarr[$key] = $items[$key];
        }
    }
    return array_change_key_case($newarr, CASE_UPPER);;
}
echo "<pre>";
//print_r(changeKeyRcursive($age));

//array_chunk
//return array
$arr = array("Peter"=>"35","Peter1"=>"35", "Ben1"=>"37", "Joe1"=>"43","Jsoe1"=>"43", "data"=>array("Peter1"=>"35", "Ben1"=>"37", "Joe1"=>"43"));
//print_r( array_chunk($arr,2));

//array column
//return array

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

//array difference logic
$a = [1,2,5,6,8];
$b = [2,9,4,5,8];
$newReturnArr = [];
function arrayDiff($firstArr, $secondArr){
    global $newReturnArr;
for($i = 0; $i<count($firstArr);$i++){
    $flag = true;
    for($j = 0; $j < count($secondArr);$j++){
      if($firstArr[$i] == $secondArr[$j]){
        $flag = false;
      }
    }
    if($flag){
    $newReturnArr[] = $firstArr[$i];
    }
}
return $newReturnArr;
}
arrayDiff($a, $b);
arrayDiff($b, $a);

print_r($newReturnArr);


 
//print_r(array_column($records, 'first_name'));

//array count value
//return array
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));



//array combine
// return array
$a = array("ds", 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);


//chunk_split
// return string
//echo chunk_split("saurabh",1);

//count_chars
// return array
$a = count_chars("saurabh",1);
foreach($a as $key=>$item){
    $newarr[chr($key)] = $item;
}
//print_r($newarr);




//recursive 

function fact($n){

    //5*4*3*2*1 = 120;
    if($n == 0){
        return 1;
    }
   return $n*fact($n-1);
    
}

//echo fact(5);


$n = 6;
// 0 1 1 2 3 5 8
$n1 = 0;
$n2 = 1;
$sum = 0;
for($i = 0; $i <= $n; $i++){
         echo $n1; 
      $sum = $n1+$n2;
        $n1 = $n2;
        $n2 = $sum;
} 



