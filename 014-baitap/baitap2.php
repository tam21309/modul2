<?php
$string = 'queenof_hell_th9497@yahoo.com';
$number = '/^[_A-Za-z0-9]+\@[A-Za-z0-9]+\.[A-Za-z]+$/';
if (preg_match($number, $string)) {
    echo 'Khớp';
    } else {
    echo 'Không khớp';
    }
    