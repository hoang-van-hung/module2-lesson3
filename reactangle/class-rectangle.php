<?php
class Rectangle
{
    public $height;
    public $width;

    public function __construct($height, $width){
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return $this->width*$this->height;
    }
    public function getPerimeter(){
        return ($this->width+$this->height)*2;
    }
    public function display(){
        return "Rectangle{"."width = ".$this->width.", height = ".$this->height. "}";
    }
}