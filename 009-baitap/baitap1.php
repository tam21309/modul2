<?php
class Stack {
    protected $stack = [];
    protected $limit;
    public function __construct($ts_limit){
      $this -> limit = $ts_limit;  
    }
    public function push($stack){
        if ( $this -> isFull() == false ){
            array_unshift ($this -> stack , $stack );
        }else {
            echo ' Stack is Full';
        }
    }
    public function pop(){
        if ( $this -> isEmpty() == false){
            array_shift($this -> stack);
        }else {
            echo ' Stack is Empty';
        }
    }
    public function isEmpty(){
        if ( count( $this -> stack) == 0){
            return true;
        } else {
            return false;
        }
    }
    public function peek(){
        if ($this -> isEmpty() == false){
            return current ($this -> stack );
        }else {
            return ' Stack is Empty'; 
        }
    }
    public function isFull(){
        if ( count( $this -> stack ) == $this -> limit){
            return true;
        } else {
            return false;
        }
    }
}
$objStack = new Stack(6);
$objStack -> push('van');
$objStack -> push('su');
$objStack -> push('dia');
$objStack -> push('toan');
$objStack -> push('li');
$objStack -> pop();
$objStack -> pop();
echo '<pre>';
print_r($objStack);
die();