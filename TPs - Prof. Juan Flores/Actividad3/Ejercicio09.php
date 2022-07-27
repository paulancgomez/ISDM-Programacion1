<?php

/*Ejercicio 9: Escribir un programa que permita ingresar números y sumarlos mientras dicha suma
no supere el valor 50.*/


$numero = Rand(1,10);  //Genero un numero del 1 al 100
echo "Numero= $numero <br>";
$suma= $numero;
echo "Suma Parcial= $suma <br>";

while ($suma <= 50)
{
    $numero = Rand(1,100);
    echo "Numero= $numero <br>";
    $suma = $suma + $numero;
    echo "Suma Parcial= $suma <br>";
}

$suma= $suma - $numero;
echo "<br>Suma Final: $suma <br>"; //Descontamos el ultimo numero que hizo que la suma supere los 50.

?>