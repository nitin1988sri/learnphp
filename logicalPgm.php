<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$string = "piftqfdhtumcmjmsge[qrsntvxhtfurcgcgynx]oyswvuklvtmivlhen[syqhqtijyiduoxb]pdtdrhijqqzvcnl[xivmeqcwyafxvnok]jvlbkrwbgcgczaqms
";
//$string = 'jajbj[bjbadswxt]cdb[xdtat]';
$Mydata = [];
$resultArr = [];
$dataResultArr = [];
$counter = 0;
if ($file = fopen("https://wollmilchsau.in/puzzle/input.1.txt", "r")) {
    while(!feof($file)) {
         $line = fgets($file);
         $Mydata[] = $line;
    }
    fclose($file);
}
function validatesStrangeID($string)
{
    
    $DataEx = $string;
    $stringData = [];
    $data = (get_string_between($string, '[', ']'));
   foreach ($data as $dataItem){
    $DataExData = str_replace($dataItem,'',$DataEx);
    $DataEx  = $DataExData ;
        for($i= 0; $i<strlen($dataItem); $i++){
          if($dataItem[$i]== @$dataItem[$i+2]){
              $stringData[] = reverse(substr($dataItem,$i,3));
          }
        }
   }
   
    $DataEx = explode("[]",$DataEx);
    $flag = true;
    foreach($stringData as $stringDatas){
       if($flag == true){
        for($i=0;$i<count($DataEx) && $flag;$i++){
            if(str_contains($DataEx[$i],$stringDatas)){
                global $dataResultArr;
                $dataResultArr[][$DataEx[$i]] = $stringDatas;
                global $counter;
                $counter++;
                $flag = false;
            }
        } 
      }
    }

}


function get_string_between($string, $start, $end){
    $st = [];
    while (str_contains($string, '[')) {
    $string = ' ' . $string;
     $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    $st[] = substr($string, $ini, $len);
    $string = str_replace($start.substr($string, $ini, $len).$end,'',$string);
    }
    return $st;
}

function reverse($string ='aba'){
     $temp = $string;
   return  $string = $temp[1].$string[0].$temp[1];
}
for($i=0;$i<count($Mydata);$i++){
    //if($i<=50){
        validatesStrangeID($Mydata[$i]);
    //}
}
 echo " total number ($counter) of supported StrangeID";

 





