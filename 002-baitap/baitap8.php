<?php
$arr1= [1,2,3,4];
$number = [5,6,7,8];
$songuyen = [];
for($i = 0; $i < count($arr1);$i ++){
    array_push($songuyen,$arr1[$i]);
}
for($j = 0; $j <count($number); $j++){
    array_push($songuyen,$number[$j]);
}
echo '<pre>';
print_r($songuyen);
echo '</pre>';
