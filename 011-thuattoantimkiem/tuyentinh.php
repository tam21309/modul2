<?php
$number = [1,4,6,7,8,3];
//         0 1 2 3 4 5
$find = 8;
foreach ($number as $key => $value){
    //$key : 0 1 2 3 4 5
    //$value:1 4 6 7 8 3
    if ($value == $find){
        echo 'Tìm thấy' . $find . 'ở vị trí'. $key;
    }
}