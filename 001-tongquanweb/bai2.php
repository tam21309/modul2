<form action="" method="post">
    <input type="text" name="tbd" placeholder="Lượng tiền đầu tư ban đầu">
    <input type="text" name="lsn" placeholder="Lãi suất năm">
    <input type="number" name="year" placeholder="Số năm đầu tư">
    <button>Calculate</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $tbd = $_POST['tbd'];
    $lsn = $_POST['lsn'];
    $year = $_POST['year'];
    $gttl = 0;
    for($i = 1 ;$i<= $year;$i++){
        $gttl = $tbd + ($tbd * $lsn);
    }
    echo 'Giá Trị Tương Lai: '.number_format($gttl).' VNĐ';
}


?>