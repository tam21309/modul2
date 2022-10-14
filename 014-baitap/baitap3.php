<?php
$string = 'C0318A';
$number = '/^[CAP]+[0-9]{4,4}+[G H I K L M]+$/';
if (preg_match($number, $string)) {
    echo 'Khớp';
    } else {
    echo 'Không khớp';
    }