<?php
class QuadraticEquation {
    protected $x = 0;
    protected $y = 0;
    protected $z = 0;
    public function __construct($ts_x, $ts_y, $ts_z){
        $this -> x = $ts_x;
        $this -> y = $ts_y;
        $this -> z = $ts_z;
    }
    public function getX(){
        return $this -> x;
    }
    public function setX($ts_x){
        $this -> x = $ts_x;
    }
    public function getY(){
        return $this -> y;
    }
    public function setY($ts_y){
        $this -> y = $ts_y;
    }
    public function getZ(){
        return $this -> z;
    }
    public function setZ($ts_z){
        $this -> z = $ts_z;
    }
    public function getDiscriminant(){
        return $this -> b * $this -> b - 4 * $this -> a * $this -> c;
    }
    public function getRoot(){
        return 
    }

}