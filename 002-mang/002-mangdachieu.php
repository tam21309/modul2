<?php
$tusach = {
    ['Toán', 'Lý', 'Hóa'];
    ['Văn', 'Sử', 'Địa'];

}
// đi qua 2 chỉ số
echo $tusach[0][1];
// thêm
$tusach[0][3] = ' Sinh';
// or
array_push($tusach[1]'Anh');
echo '<pre>';
print_r($tusach);
echo '</pre>';
// duyệt mảng
for($i = 0; $i <= 1; $i++){
    for($j = 0; $j <4 ; $j++){
        echo $tusach[$i][$j]. '<br>';
    }
}
