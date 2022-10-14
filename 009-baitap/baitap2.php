<?php
class Node {
    protected $value = [];
    protected $next;
    public function __construct($next){
        $this->next = $next;
    }
}
class Queue extends Node {
    protected $front;
    protected $back;
    public function __construct($front, $back){
        $this->front = $front;
        $this->back = $back;
    }
    public function enqueue ($value){
        if ( $this -> isFull() == false ){
            array_push ($this -> value, $value);
        }else {
            echo ' Queue is Full';
        }
    }
    public function dequeue (){
        if ( $this -> isEmpty() == false){
            array_shift($this -> value);
        }else {
            echo ' Queue is Empty';
        }
    }
    public function isEmpty (){
        if ( count( $this -> value) == 0){
            return true;
        } else {
            return false;
        }
    }
    public function isFull (){
        if ( count( $this -> value) == $this -> next){
            return true;
        } else {
            return false;
        }  
    }
    public function peek (){
        if ($this -> isEmpty() == false){
            return current ($this -> value);
        }else {
            return ' Queue is Empty'; 
        }
    }
}
$objQueue = new Queue(1,2);
$objQueue -> enqueue('van');
$objQueue -> enqueue('su');
$objQueue -> enqueue('li');
$objQueue -> enqueue('dia');
echo $objQueue-> peek();
echo '<pre>';
print_r($objQueue);
die();
