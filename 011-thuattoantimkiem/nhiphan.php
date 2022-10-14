<?php
$find = 23;
$number = [ 2, 5, 8, 12, 16, 23, 38, 56, 72, 91];
//          0  1  2  3    4   5   6   7   8   9
$L = 0;
$R = 9;
$M = floor (($L + $R)/ 2);//4
// number[4] : 16
if ( $number[$M] > $find){
    $R = $M -1;
}else if ($number[$M] < $find){
    $L = $M + 1;
}else {
    echo 'Tìm ra' . $find . 'tại vị trí' . $M;
}


/*
L = 5
R = 9
*/


$M = floor(($L + $R)/2);//7
// number[7] : 56

if ( $number[$M] > $find){
    $R = $M -1;
}else if ($number[$M] < $find){
    $L = $M + 1;
}else {
    echo 'Tìm ra' . $find . 'tại vị trí' . $M;
}

/*
L = 5
R = 6
*/
$M = floor(($L + $R)/2);//5
if ( $number[$M] > $find){
    $R = $M -1;
}else if ($number[$M] < $find){
    $L = $M + 1;
}else {
    echo 'Tìm ra' . $find . 'tại vị trí' . $M;
}
// HOẶC C2

$R = count($numbers)-1;
while($L <= $R){
    $M = floor(($L + $R)/2);//4
    //$numbers[$M] = 16
    if($numbers[$M]> $find){
        $R = $M - 1;
    }elseif($numbers[$M]<$find){
        $L = $M + 1;
    }else{
        echo 'Tìm ra '.$find.'Tịa vị trí '.$M;
        break;
    }
}
die();

