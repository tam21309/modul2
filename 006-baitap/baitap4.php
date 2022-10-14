<?php
interface Resizeable{
    function resize();
}
class Square implements Resizeable {
    protected $x;
    public function __construct($ts_x){
        $this -> x = $ts_x;
    }
    public function getArea(){
        return 'Diện tích hình vuông là:'. $this -> x * $this -> x;
    }
     function resize(){
        return $this -> getArea * (1+ $this -> x /100);
    }
}
class HCN {
    protected $x;
    protected $y;
    public function __construct($ts_x,$ts_y){
        $this -> x = $ts_x;
        $this -> y = $ts_y;
    }
    public function getArea(){
        return 'Diện tích hình chữ nhật là:'. $this -> x * $this -> y;
    }
    function resize(){
        return $this -> getArea * (1+ $this -> x /100);
    }
}
define ('PI', '3.14');
class Circle {
    protected $r;
    public function __construct($ts_r){
        $this -> r = $ts_r;
    }
    public function getArea(){
        return 'Diện tích hình tròn là:'. $this -> r * $this -> r * PI;
    }
}
$objs[0] = new Square (5);
$objs[1] = new HCN (3,4);
$objs[2] = new Circle (7);
foreach($objs as $key => $value){
    echo $value->getArea();
    echo '<br>';
}
