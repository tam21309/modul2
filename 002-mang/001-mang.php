<?php
$books = array("Toán", "Lý", "Hóa");
// hoặc
$books = ["Toán", "Lý", "Hóa"];
// xuất
echo $books[0];
// thay đổi
$books[0] = 'Toán Học';
// thêm
$books[3] = 'Sinh Học';
// in mảng
echo '<pre>';
print_r($books);
echo '</pre>';
// duyệt mảng
for($i = 0; $i <count(books); $i ++){
    echo $i;
}