<?php
class Triangle {
    protected float $slide1 = 1.0;
    protected float $slide2 = 1.0;
    protected float $slide3 = 1.0;
    public function __construct($ts_slide1, $ts_slide2, $ts_slide3){
        $this -> slide1 = $ts_slide1;
        $this -> slide2 = $ts_slide2;
        $this -> slide3 = $ts_slide3;
    }
    public function getSlide1(){
        return $this -> slide1;
    }
    public function setSlide1($ts_slide1){
        $this -> slide1 = $ts_slide1;
    }
    public function getSlide2(){
        return $this -> slide2;
    }
    public function setSlide2($ts_slide2){
        $this -> slide2 = $ts_slide2;
    }
    public function getSlide3(){
        return $this -> slide3;
    }
    public function setSlide3($ts_slide3){
        $this -> slide3 = $ts_slide3;
    }
    public function getArea(){
        return sqrt(($this ->slide1 + $this ->slide2 + $this ->slide3)*($this ->slide1 + $this ->slide2 - $this ->slide3)*($this ->slide2 + $this ->slide3 - $this ->slide1)*($this ->slide3 + $this ->slide1 - $this ->slide2))/4;
    }
    public function getPerimeter(){
        return $this ->slide1 + $this ->slide2 + $this ->slide3 ;
    }
    public function toString(){
        return [$this -> slide1 . '' . $this -> slide2 . '' . $this -> slide3];
    }
}
$obj = new Triangle(3,4,5);
echo 'Chu vi tam giác là: '. $obj -> getPerimeter().'<br>';
echo 'Diện tích tam giác là: '. $obj -> getArea();