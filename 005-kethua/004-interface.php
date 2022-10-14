<?php
// ResizeAble : khả năng cho phép điều chỉnh kích thươc
interface ResizeAble {
    // hắng số 
    const SIZE = 0;

    //PTTT resize
    function resize();

}

interface FillColor {
    //PTTT : fill
    function fill();
}

abstract class HinhHoc {
    abstract function tinhDienTich();
    abstract function tinhChuVi();
}
class HinhVuong extends HinhHoc implements ResizeAble,FillColor {
    public function tinhDienTich(){

    }
    public function tinhChuVi(){
        
    }
    public function resize(){

    }
    public function fill(){
        
    }
 

}