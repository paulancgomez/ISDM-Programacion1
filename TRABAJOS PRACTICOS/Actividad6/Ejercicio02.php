<?php

//Ejercicio 2: Escribir una función que devuelva el promedio de tres números reales.


//DEFINICION DE FUNCIONES y PROCEDIMIENTOS

function promedio3($a, $b, $c){ 
    $promedio = ($a + $b + $c) / 3;
    return $promedio;
}


//PROGRAMA PRINCIPAL

$n1 = Rand(1,50);
$n2 = Rand(1,50);
$n3 = Rand(1,50);                   
echo "El promedio de $n1, $n2 y $n3 es: " . promedio3($n1,$n2,$n3);

?>