<?php
$arr = [9, 12, 4, 8, 24, 35, 78];
for ($i = 0; $i < count($arr); $i++) {
    $min = $i;
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$j] < $arr[$min]) {
            $min = $j;
        }
    }
        $temp = $arr[$min];
        $arr[$min] = $arr[$i];
        $arr[$i] = $temp;
    }

echo '<pre>';
print_r($arr);
die();
