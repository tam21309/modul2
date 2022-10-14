<?php
$arr = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
for ($i = 1; $i < count($arr); $i++){
   $j = $i -1;
   $temp = $arr[$i];
   while ($temp > $arr[$j] && $j >= 0){
    $arr[$j + 1]= $arr[$j];
    $j--;
   }
   $arr[$j + 1] = $temp;
}
echo '<pre>';
print_r($arr);
die();