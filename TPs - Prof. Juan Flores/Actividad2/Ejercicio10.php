<?php

/*  Ejercicio 10:
    Desarrolle un algoritmo que permita leer un valor cualquiera A y escribir si dicho
    número es múltiplo de Z.*/

$A = 12;
$Z = 2;

if($A % $Z == 0){
    echo 'El numero ' . $A . ' es multiplo de ' . $Z;
}else{
    echo 'El numero ' . $A . ' NO es multiplo de ' . $Z;
}

?>