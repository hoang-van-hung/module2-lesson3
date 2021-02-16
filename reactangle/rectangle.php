<?php
include "class-rectangle.php";
$Rectangle =new Rectangle(10,20);
$Rectangle->height=30;
echo $Rectangle->display()."<br>";
echo "Rectangle perimeter : ".$Rectangle->getPerimeter()."<br>";
echo "Rectangle acreage : ".$Rectangle->getArea()."<br>";

