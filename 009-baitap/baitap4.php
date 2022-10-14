<?php
class Stack {
    protected $int = [];
    protected $limit;
    public function __construct($limit){
        $this-> limit = $limit;
    }
    public function push($int){
        if ( $this -> isFull() == false ){
            array_unshift ($this -> int , $int );
        }else {
            echo ' Stack is Full';
        }
    }
    public function pop(){
        if ( $this -> isEmpty() == false){
            array_shift($this -> int);
        }else {
            echo ' Stack is Empty';
        }
    }
    public function isFull(){
        if ( count( $this -> int ) == $this -> limit){
            return true;
        } else {
            return false;
        }
    }
    public function isEmpty(){
        if ( count( $this -> int) == 0){
            return true;
        } else {
            return false;
        }
    }
}
$objStack = new Stack(4);
$objStack -> push('tam');
$objStack -> push('linh');
$objStack -> push('thang');
$objStack -> push('phi');
$objStack -> pop();
echo '<pre>';
print_r($objStack);
die();
