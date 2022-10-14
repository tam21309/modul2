<?php
$books = ['van', 'su', 'dia'];
$temp = $books[1];
$books[1] = $books[0];
$books[0] = $temp;
echo '<pre>';
print_r($books);
die();