<?php
/* Danh từ
 CamelCase : kí tự đầu tiên của chữ viết hoa
 không trùng từ khóa
 không bắt đầu bằng số, kí tự đặc biệt

 name
 gender
 color
 */
 class ConMeo{
    // thuoc tinh
    public $name = '';
    public $gender = '';
    public $color = '';

    //construct
    public function __construct($ts_name , $ts_gender, $ts_color){
        $this -> name = $ts_name;
        $this -> gender = $ts_gender;
        $this -> color = $ts_color;
    }
     
    // phương thức
    public function setName($name){
        $this -> name = $name;
    }
    public function getName(){
        return $this -> name;
    }
    public function setGender($gender){
        $this -> gender = $gender;
    }
    public function getGender(){
        return $this -> gender;
    }
    public function setColor($color){
        $this -> color = $color;
    }
    public function getColor(){
        return $this -> color;
    }
 }

 // khởi tạo đối tượng
 $objConMeo = new ConMeo();

 //thiết lập giá trị các thuộc tính name, gender,color bằng cách gọi phương thức
 $objConMeo -> setName('miu');
 $objConMeo -> setGender('male');
 $objConMeo -> setColor('white');

 //in đối tượng
echo '<pre>';
print_r($objConMeo);
echo '</pre>';

//truy cập vào phương thức
 echo '<br>'. $objConMeo -> getName();
 echo '<br>' .$objConMeo -> getGender();
 echo '<br>' .$objConMeo -> getColor();

 echo '<hr>';

 // truy cập thuộc tính
 echo '<br>'. $objConMeo -> name;
 echo '<br>'. $objConMeo -> gender;
 echo '<br>'. $objConMeo -> color;