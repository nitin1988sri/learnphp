<?php
$k=8;
$colour="B";
for($i =1; $i<=$k; $i++){
    for($j=1; $j<=$k; $j++){
        if($i%2==0){
        echo $j%2==0?'W':'B';
        }else{
            echo $j%2==0?'B':'W'; 
        }
    }
    echo "<br>";
}
