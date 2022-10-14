<?php
// Container : lớp chứa dữ liệu
class Arraylis {
    // thuộc tính
    private $element = [];
    // lấy về 1 phần tử
    public function get ($index){
        // lấy về 1 phần tử
        return $this -> element[$index];
    }
    public function add ($element){
        // thêm 1 phần tử
        array_push ( $this -> element, $element);
    }
    public function removeByIndex ($index){
        // xóa 1 phần tử
        array_splice ( $this -> element, $index,1);
    }
    public function size(){
        // lấy về số lượng phần tử
        return count ( $this -> element);
    }
    public function find ($element){
        // tìm kiếm 1 phần từ
        return array_search( $element, $this -> element);
    }
    public function isEmpty (){
        // kiểm tra rỗng
        if ( count( $this -> element) == 0){
            return true;
        } else {
            return false;
        }
    }
    public function isset ($index){
        // kiểm tra có tồn tai phần tử hay không
        if ( isset( $this -> element[$index])){
            return $this -> element[$index];
        } else {
            return false;
        }
    }
}
$objArraylis = new Arraylis();
$objArraylis -> add ('Thảo Tâm');
$objArraylis -> add ('Bảo Thắng');
$objArraylis -> add ('Xuân Thắng');
$objArraylis -> add ('Hữu Nhân');
$objArraylis -> add ('Phong Tâm');
echo $objArraylis -> size();
echo '<br>';
$objArraylis -> removeByIndex(3);
echo $objArraylis -> find('Xuân Thắng');
echo '<br>';
var_dump ($objArraylis -> isEmpty());
echo '<br>';
echo $objArraylis -> get(2);
echo '<pre>';
print_r($objArraylis);
echo '</pre>';