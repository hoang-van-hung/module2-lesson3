<?php
include "quadratic.php";
$Quadratic = new QuadraticEquation(1,2,1);

$Quadratic->a=1;
$Quadratic->b=5;
$Quadratic->c=4;

echo "Pt co delta = ".$Quadratic->getDiscriminant()."<br>";
echo $Quadratic->getroot();
