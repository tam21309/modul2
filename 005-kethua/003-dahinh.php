<?php
// Lớp trừu tượng
abstract class SinhVat{
    // PT trừu tượng
    abstract function say();
}
// public function run(){

// }
    // PT bình thường

abstract class HinhHoc {
    abstract function tinhDienTich();
    abstract function tinhChuVi();
}
class HinhVuong extends HinhHoc {
    public function tinhDienTich(){

    }
    public function tinhChuVi(){

    }

}