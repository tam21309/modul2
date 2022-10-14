<?php
class poin2d {
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
class poin3d extends poin2d {
    protected float $z = 0;
    public function __construct($ts_x, $ts_y, $ts_z){
        $this -> z = $ts_z;
    }
    public function getZ(){
        return $this -> z;
    }
    public function setZ($ts_z){
        $this -> z = $ts_z;
    }
    public function getXYZ(){
        return [$this -> x, $this -> y, $this -> z];
    }
    public function setXYZ($ts_x, $ts_y, $ts_z){
        $this -> y = $ts_y;
        $this -> x = $ts_x;
        $this -> z = $ts_z;
    }
    public function toString(){
        return $this->x . '<br> ' . $this -> y . '<br> ' . $this -> z;
    } 
}
$objXYZ = new poin3d(3,4,5);
$objXYZ->setX(5);
$objXYZ->setY(6);
$objXYZ->setZ(7);
echo $objXYZ->toString();



