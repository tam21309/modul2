<?php
class Cha {
    protected $name = 'Nguyen Van A';
    public function car(){
        echo 'xe cua cha';
    }
    public final function house(){
        
    }
}
class Con extends Cha {
    public function car(){
        parent :: car();
        echo 'xe cua con';
    }
}
$objCon = new Con();
$objCon -> car();