<?php
$number = [2,4,5,7,9];
$min = $number[0];
for($i = 0; $i <count($number); $i++){
    if($number[$i]< $min){
        $min = $number[$i];
    }
}
echo $min;