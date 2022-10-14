<?php
$objSplqueue = new SplQueue();
$objSplqueue-> enqueue('tam');
$objSplqueue-> enqueue('thang');
$objSplqueue-> enqueue('x.thang');
$objSplqueue-> enqueue('nhan');
$objSplqueue-> enqueue('p.tam');
$objSplqueue-> dequeue();

$objSplqueue->rewind();// đưa con trỏ về vị trí đầu tiên
    while ($objSplqueue->valid()){
        echo '<br>'. $objSplqueue->current();
        $objSplqueue->next();
    }


echo '<pre>';
print_r($objSplqueue);
die();