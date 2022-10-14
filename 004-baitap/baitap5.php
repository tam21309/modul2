<?php
class Employee {
    private $firstname = '';
    private $name = '';
    private $birthday = '';
    private $adress = '';
    private $vtcv = ''; 

    public function __construct ($ts_firstname, $ts_name, $ts_birthday, $ts_adress, $ts_vtcv){
        $this -> firstname = $ts_firstname;
        $this -> name = $ts_name;
        $this -> birthday = $ts_birthday;
        $this -> adress = $ts_adress;
        $this -> vtcv = $ts_vtcv;
    }
    public function getFirstname(){
        return $this -> firstname;
     }
    public function setFirstname($ts_firstname){
        $this -> firstname = $ts_firstname;
    }
    public function getName(){
        return $this -> name;
     }
    public function setName($ts_name){
        $this -> name = $ts_name;
    }
    public function getBirthday(){
        return $this -> birthday;
     }
    public function setBirthday($ts_birthday){
        $this -> name = $ts_birthday;
    }
    public function getAdress(){
        return $this -> adress;
     }
    public function setAdress($ts_adress){
        $this -> name = $ts_adress;
    }
    public function getVtcv(){
        return $this -> vtcv;
     }
    public function setVtcv($ts_vtcv){
        $this -> name = $ts_vtcv;
    }
}
class EmployeeManager {   
    private array $Employee;
    static array $ds;
    public function __construct()
    {
        $this->Employee=[];
        self::$ds=[];
    }
    public function add($employees)///thêm nhân sự
    {
        $this->Employee[]=$employees;
    }
    public function getEmployee(): array///in ra chi tiết nhân sự
    {
        return $this->Employee;
    }
  
    public function find($id)
    {
        return $this->Employee[$id];
    }

}