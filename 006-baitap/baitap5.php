<?php
interface Colorable {
    function howToColor();
}
 class Square implements Colorable {
    protected $x;
    public function __construct($ts_x)
    {
        $this->x = $ts_x;
    }
    public function howToColor(){
        echo 'Color all four sides..';
    }
    public function getArea(){
        return 'Diện tích hình vuông là:'. $this->x * $this->x;
    }
}
class HCN {
    public $x;
    public $y;
    public function __construct($ts_x, $ts_y){
        $this -> x = $ts_x;
        $this -> y = $ts_y;
    }
    public function getArea(){
        return 'Diện tích hình chữ nhật là:'. $this -> x * $this -> y; 
    }
}
//getArea*(1+ $t_s/100)
$objs[0] = new Square(5);
$objs[1] = new HCN(3,4);
foreach($objs as $key => $value){
    echo $value->getArea();
    echo '<br>';
}
