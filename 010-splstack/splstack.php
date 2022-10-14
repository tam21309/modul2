<?php
    // Last In First Out
    $objSplstack = new Splstack();
    // thêm phần tử vào danh sách
    $objSplstack->push('tam');
    $objSplstack->push('thang');
    $objSplstack->push('nhan');
    $objSplstack->push('p.tam');
    $objSplstack->push('x.thang');
    // lấy phần tử ra
    $objSplstack->rewind();// đưa con trỏ về vị trí đầu tiên
    while ($objSplstack->valid()){
        echo '<br>'. $objSplstack->current();
        $objSplstack->next();
    }
    $objSplstack->add(4,'ngoc.linh');// chèn phần tử
echo '<pre>';
print_r($objSplstack);
die();