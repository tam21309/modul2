<?php
/*
Các hàm xử lí chuổi:
Tìm kiếm và xủ lí các bài tập sau
1. Chuyển chuỗi tôi,yêu,lập,trình sang mảng ['Tôi','yêu','lập','trình']
- gợi ý : Tách chuỗi thành mảng PHP

2. Chuyển mang ['Tôi','yêu','lập','trình'] sang chuỗi Toi yeu lap trinh
- gợi ý : chuyển mảng thành chuỗi PHP

3.Từ chuỗi Tôi yêu lập trình thay thế bằng Tôi yêu Codegym
- gợi ý : tìm và thay thế chuỗi php

4. Từ chuỗi Tôi yêu Codegym, kiểm tra kĩ từ Codegym có nằm trong chuỗi hay k
*/
// // 1.
$msg = 'tôi yêu lập trình';
$msg_2 = ['Tôi','yêu','lập','trình'];
echo '<pre>';
print_r($msg_2);

// //2.
$msg = ['Tôi','yêu','lập','trình'];
$msg_2 = 'tôi yêu lập trình';
echo $msg_2;
echo '<br>';

//3.
$str = 'tôi yêu lập trình';
$str = str_replace( 'lập trình','codegym',$str);
echo $str;
echo '<br>';


//4.
$str = 'tôi yêu Codegym';
$char = 'Codegym';
$pos = strpos($str,$char);
if($pos == true){
    echo 'có nằm trong chuỗi ở vị trí thứ'.$pos;
}



