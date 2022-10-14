<?php
class Rectangle
{
    public int $width;
    public int $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // tinh dien tich
    public function getArea(): int
    {
        return $this->width * $this->height;
    }

    //tinh chu vi
    public function getPerimeter(): int
    {
        return (($this->width + $this->height) * 2);
    }

    public function display(): string
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
// include_once "Rectangle.php";

$rectangle = new Rectangle(20, 30);
echo $rectangle->width.'<br>'; 
echo $rectangle->height.'<br>'; 

// echo $rectangle->height; 
// echo $rectangle->width;
echo $rectangle->getPerimeter().'<br>';
echo $rectangle->getArea().'<br>';
echo ("Your Rectangle". $rectangle->display());
        