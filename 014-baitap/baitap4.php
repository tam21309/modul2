<?php
$string = '84-0978489648';
$number = '/^[0-9]{2,2}+\-[0-9]+$/';
if (preg_match($number, $string)) {
    echo 'Khớp';
    } else {
    echo 'Không khớp';
    }