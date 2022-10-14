<?php
 class Person{
    // thuoc tinh
    public $name = '';
    public $age = 0;
    public function __construct($ts_name , $ts_age){
        $this -> name = $ts_name;
        $this -> age = $ts_age;
    }
    public function sayHello(){
        return 'Hello';
    }
    public function getAge(){
        return $this -> age;
    }

    public function getName(){
        return $this -> name;
    }
}

$objPerson = new Person('tâm',18);
echo '<pre>';
print_r($objPerson);
echo '</pre>';

// truy cập thuộc tính

echo '<br>'. $objPerson -> name;
 echo '<br>'. $objPerson -> age;

// truy cập phương thức

echo '<br>'. $objPerson -> getName();
echo '<br>' .$objPerson -> getAge();