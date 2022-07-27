<?php

/*Ejercicio 3: Dada una lista de N números ingresados por el usuario, calcular y mostrar:
a) La suma de todos los números.
b) El producto de todos los números*/


//GENERO LA CANTIDAD DE MANERA ALEATORIA DE 1 A 20
$n = Rand(5,20);
echo "Cantidad N= $n <br>";

/*CANTIDAD DESDE UN FORMULARIO
$n = $_POST["n"];
*/

$sumador= 0;       //Neutro de la suma
$productoria= 1;   //Neutro del producto

for ($i=1; $i<=$n; $i++)
{
    $numero= Rand(1,10);
    echo "$numero // "; 
    $sumador= $sumador + $numero;
    $productoria= $productoria * $numero;
}

echo "<br>a) La suma de todos los numeros es: $sumador<br>";
echo "b) El producto de todos los numeros es: $productoria";

?>