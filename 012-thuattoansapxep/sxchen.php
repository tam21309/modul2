<?php
$arr = [9,12,4,8,24,35,78];
for ($i = 0; $i < count($arr); $i++){
   $j = $i - 1;
   $temp = $arr[$i];
   while ($temp < $arr[$j] && $j >= 0){
    $arr[$j + 1]= $arr[$j];
    $j--;
   }
   $arr[$j + 1] = $temp;
}
echo '<pre>';
print_r($arr);
die();