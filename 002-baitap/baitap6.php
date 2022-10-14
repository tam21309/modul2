<?php
$arr = [
    [2,4,8,10],
    [3,6,9,12,15],
];
$max = $arr[0][0];
for($i = 0; $i < count($arr); $i++){
    for($j = 0; $j < count ($arr[$i]); $j++){
        if($arr[$i][$j] > $max){
            $max = $arr[$i][$j];
        }
    }
}
echo $max;