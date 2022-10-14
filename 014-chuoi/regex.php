<?php
$string = '+84.555.666.777';
$pattern = '/\+[0-9]{2,2}\.[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}/';
if (preg_match($pattern, $string)) {
echo 'Khớp';
} else {
echo 'Không khớp';
}

$subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$pattern = '/CodeGym/';
print('<pre>');
preg_match_all($pattern, $subject, $matches);
print_r($matches);
print('</pre>');

//tách hàng và xóa chấmv
$ip = "192.168.1.1";
$iparr = preg_split ("/\./", $ip);
print "$iparr[0] <br />";
print "$iparr[1] <br />" ;
print "$iparr[2] <br />" ;
print "$iparr[3] <br />" ;