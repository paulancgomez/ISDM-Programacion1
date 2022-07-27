<?php

/*Ejercicio 8: Desarrollar un programa para cada uno de los siguientes puntos:
a) Ingresar un número entero X y mostrar todos sus divisores. */

//Un numero es divisible por otro si el resto es cero. Ejemplo: Los divisores de 10 son: 1, 2, 5, 10.

//GENERO EL NUMERO DEL 1 AL 100
$numero = Rand(1,100);
echo "Numero= $numero <br>";

/*CANTIDAD DESDE UN FORMULARIO
$n = $_POST["n"];
*/

for ($divisor=1; $divisor<=$numero; $i++)
{
    if($numero % $divisor == 0){
        echo "$divisor // ";  //Mostramos el divisor
    }
}

?>