<?php
$tong = 0;
$tru = 0;
$nhan = 0;
$chia = 0;
function calculate($x,$y){
    $tong = $x + $y;
    $tru = $x - $y;
    $nhan = $x * $y;
    $chia = $x / $y;
    echo $tong.'<br>';
    echo $tru.'<br>';
    echo $nhan.'<br>';
    echo $chia.'<br>';
    if($y == 0 || $x == $y == 0){
        echo 'tham số khác 0';
    }
}
calculate(3,4);