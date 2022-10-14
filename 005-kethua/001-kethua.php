<?php
class Cha {
    protected $name = 'Nguyen Van A';
    public function car(){
        echo __METHOD__;
    }
    public function house(){
        echo __METHOD__;
    }        
}

class Con extends Cha {
    public function car(){
        echo 'xe cua con';
    }
    public function house(){
        echo 'nha cua con';
    }
    public function getName(){
        return $this -> name;
    }
}
 $objCon = new Con();
 $objCon -> car();
 echo '<br>';
 $objCon -> house();
 echo '<br>';

 echo $objCon -> getName();
//  echo $objCon -> name;


    