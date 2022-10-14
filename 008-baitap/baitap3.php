<?php
class ArrayList {
    private $element = [];
    public function insert ($index){
        // kiểm tra có tồn tai phần tử hay không
        if ( isset( $this -> element[$index])){
            return $this -> element[$index];
        } else {
            return false;
        }
    }
    public function add ($obj){
        array_push ($this -> element , $obj);
    }
    public function removeByIndex ($index){
        array_splice ( $this -> element, $index,1);
    }
    public function get ($index){
        return $this -> element[$index];
    }
    public function size(){
        return count ( $this -> element);
    }
    public function isEmpty (){
        if ( count( $this -> element) == 0){
            return true;
        } else {
            return false;
        }
    }
    public function addAll($arr){
        $this -> element = $arr;
        return $this -> element;
    }
    public function clear (){
        $this -> element = [];
    }
    public function sort (){
        $arr = sort ($this -> element);
        return $arr;
    }
    public function reset(){
        reset ($this -> element);
    }
}
$obj = new Arraylist();
$obj -> add ('Ngọc Linh');
$obj -> add ('Phùng Phi');
$obj -> add ('Dương Khang');
$obj -> add ('Phan Thảo');
$obj -> add ('Hồng Thắm');
echo $obj -> size();
echo '<br>';
echo $obj -> insert(4);
echo '<br>';
$obj-> removeByIndex(3);
var_dump ($obj -> isEmpty());
echo '<br>';
echo $obj -> get(2);
echo '<pre>';
print_r($obj);
echo '</pre>';