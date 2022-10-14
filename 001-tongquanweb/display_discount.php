<?php 
$gny = $_POST['gny'];
$ptck = $_POST['tlck'];
$stck = $gny *  $ptck * 0.1;

echo 'Số tiền chiết khấu: '.number_format($stck).'<br>';
echo 'Giá chiết khấu: '.number_format($stck+$gny);

?>
