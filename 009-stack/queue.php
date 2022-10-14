<?php
/*
• enqueue(): thêm (hay lưu trữ) một phần tử vào trong hàng đợi.
• dequeue(): xóa một phần tử từ hàng đợi.
• peek(): lấy phần tử ở đầu hàng đợi, mà không xóa phần tử này
• isEmpty(): Kiểm tra rỗng
• isFull(): kiểm tra xem hàng đợi đã đầy hay chưa.
*/
class Queue {
    protected $elements = [];
    protected $limit;
    public function __construct($ts_limit){
        $this -> limit = $ts_limit;
    }
    public function enqueue ($elm){
        if ( $this -> isFull() == false ){
            array_push ($this -> elements, $elm);
        }else {
            echo ' Queue is Full';
        }
    }
    public function dequeue (){
        if ( $this -> isEmpty() == false){
            array_shift($this -> elements);
        }else {
            echo ' Queue is Empty';
        }
    }
    public function peek (){
        if ($this -> isEmpty() == false){
            return current ($this -> elements);
        }else {
            return ' Queue is Empty'; 
        }
    }
    public function isEmpty (){
        if ( count( $this -> elements) == 0){
            return true;
        } else {
            return false;
        }
    }
    public function isFull (){
        if ( count( $this -> elements) == $this -> limit){
            return true;
        } else {
            return false;
        }  
    }
}
$objQueue = new Queue(5);
$objQueue -> enqueue('van');
$objQueue -> enqueue('su');
$objQueue -> enqueue('dia');
$objQueue -> enqueue('toan');
$objQueue -> enqueue('ly');
$objQueue -> enqueue('hoa');
echo $objQueue -> peek();
// echo $objQueue -> isEmpty();
// echo $objQueue -> isFull();
echo '<pre>';
print_r($objQueue);
die();
