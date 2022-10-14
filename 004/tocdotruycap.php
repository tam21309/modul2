<!-- // protected == private;
// public truy cập được mọi nơi -->
<?php
class Student{
    protected $name;
    public $age;
    public $gender;

     public function __construct($ts_name, $ts_age, $ts_gender){
        $this -> name = $ts_name;
        $this -> age = $ts_age;
        $this -> gender = $ts_gender;
     }
     public function showInfo(){
        echo 'Hi'.$this ->name;
     }

     public function getName(){
        return $this -> name;
     }
     public function setName($ts_name){
        $this -> name = $ts_name;
     }
}

     //khởi tạo đối tượng
     $objStudent = new Student('Nguyen Van A',20,'male');
     // đặt lại giá trị thuộc tinh
     $objStudent ->name = 'Nguyen Van B';
      
     echo '<pre>';
     print_r($objStudent);
     echo '</pre>';

     // truy cập thuộc tính - outside
     echo '<br>'.$objStudent -> name;

    // truy cập phương thức
    $objStudent -> showInfo();
