<?php
$string = 'queenofhell9497@yahoo.com';
$str = '/[A-Za-z0-9]+[A-Za-z0-9]+\@[a-z]+\.[a-z]/';
if (preg_match($str, $string)) {
echo 'Khớp';
} else {
echo 'Không khớp';
}