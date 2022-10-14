<?php
define ('PI',3.14);
class Cylinder {
    public function getVolume ($radius, $height) {
        $baseArea = $this->getPerimeter($radius);
        $perimeter = $this->getBaseArea($radius);
        return $perimeter * $height + 2 * $baseArea;
    }
    
    public function getPerimeter($radius) {
        return PI * $radius * $radius;
    }
    
    public function getBaseArea($radius) {
        return 2 * PI * $radius;
    }
}
$obj = new Cylinder(10,12);
echo $obj -> getVolume(3,4);
echo '<br>';
echo $obj -> getPerimeter(5);
echo '<br>';
echo $obj -> getBaseArea(6);