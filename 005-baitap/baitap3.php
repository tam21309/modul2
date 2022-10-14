<?php

use Circle as GlobalCircle;

    define('PI',3.14);
class Circle{
    protected $r = 0;
    protected $color = 'red';
    public function __construct($ts_r){
        $this -> r = $ts_r;
    }
    public function getR(){
        return $this -> r;
    }
    public function setR($ts_r){
        $this -> r = $ts_r;
    }
    public function getArea(){
        return $this -> r * $this -> r * PI;
    }
}
class Cylinder extends Circle{
    protected $height = 0;
    public function __construct($ts_height){
        $this -> height = $ts_height;
    }
    public function getHeight(){
        return $this -> height;
    }
    public function setHeight($ts_height){
        $this -> height = $ts_height;
    }
    public function getVolume(){
        return $this -> r * $this -> r * $this -> height * PI;
    }
}
$obj = new Cylinder(12);
$obj -> setR(3);
echo ' Thể Tích Hình Trụ Là :'. $obj -> getVolume();
