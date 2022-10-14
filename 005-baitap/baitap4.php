<?php
class Point {
    protected float $x = 0;
    protected float $y = 0;
    public function __construct($ts_x,$ts_y){
        $this -> x = $ts_x;
        $this -> y = $ts_y;
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
    public function getXY(){
        return [$this -> x, $this -> y];
    }
    public function setXY($ts_x,$ts_y){
        $this -> y = $ts_y;
        $this -> x = $ts_x;
    }
    public function toString(){
        return $this->x . '' . $this -> y;
    }
}
class MoveablePoint extends Point {
    protected $xSpeed = 0;
    protected $ySpeed = 0;
    public function __construct( $ts_x, $ts_y, $ts_xSpeed , $ts_ySpeed){
        $this -> xSpeed = $ts_xSpeed;
        $this -> ySpeed = $ts_ySpeed;
    }
    public function getXSpeed(){
        return $this -> xSpeed ;
    }
    public function setXSpeed($ts_xSpeed){
        $this -> xSpeed = $ts_xSpeed;
    }
    public function getYSpeed(){
        return $this -> ySpeed ;
    }
    public function setYSpeed($ts_ySpeed){
        $this -> ySpeed = $ts_ySpeed;
    }
    public function getSpeed(){
        return [$this -> Speed];
    }
    public function toString(){
        return $this->x . '<br> ' . $this -> y . '<br>  ' . $this -> xSpeed . '<br>  ' . $this -> ySpeed;
    }
}
$obj = new MoveablePoint(10,1,13,15);
$obj->setX(8);
$obj->sety(12);
$obj->setXSpeed(24);
$obj->setYSpeed(11);
echo $obj -> toString();