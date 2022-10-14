<?php
class User {
    protected $name = '';
    protected $email = '';
    public $role = '';
    public function __construct($ts_name, $ts_email, $ts_role){
        $this -> name = $ts_name;
        $this -> email = $ts_email;
        $this -> role = $ts_role;
     }
     public function getInfo(){
        echo $this ->name.'<br>';
        echo $this ->email.'<br>';
        echo $this ->role.'<br>';
     }
     public function isAdmin(){
       if ($this ->role == 1){
        echo 'Admin';
       }else {
        echo 'người dùng bình thường';
       }
     }
     public function getName(){
        return $this -> name;
     }
     public function setName($ts_name){
        $this -> name = $ts_name;
     }
     public function getEmail(){
        return $this -> email;
     }
     public function setEmail($ts_email){
        $this -> name = $ts_email;
     }
     public function getRole(){
        return $this -> role;
     }
     public function setRole($ts_role){
        $this -> name = $ts_role;
     }
}
$objUser =  new User('Thao Tam', 'belltam@gmail',2);
$objUser -> getInfo();