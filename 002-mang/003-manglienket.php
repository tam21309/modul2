<?php
$info = [
    'name' => 'Tâm',
    'age' => 26,
    'gender' => 'Nữ'
];
echo '<pre>';
print_r($info);
echo '</pre>';
echo $info['name'];
echo $info['age'];
echo $info['gender'];
// xóa phần tử
unset($info['gender']);

