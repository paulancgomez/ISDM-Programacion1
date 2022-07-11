<?php
//Ejercicio 3: Desarrolle un programa que permita determinar la hipotenusa de un triángulo rectángulo conocidas las longitudes de sus dos catetos.

$cateto1 = 2;
$cateto2 = 3;
$hipotenusa = sqrt(pow($cateto1,2) + pow($cateto2,2));

echo "Cateto 1: $cateto1 <br>";
echo "Cateto 2: $cateto2 <br>";
echo "La hipotenusa es: $hipotenusa";

?>