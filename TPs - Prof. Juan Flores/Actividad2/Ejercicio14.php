<?php
/*  Ejercicio 14:
    Desarrolle un algoritmo que permita leer un valor A y decir si dicho número es
    positivo, negativo o cero.
*/

$A = 10;

echo "Valor=" . $A;

if($A > 0){
    echo "El numero es POSITIVO.";
}else if($A < 0){
    echo "El numero es NEGATIVO.";
}
else{
    echo "El numero es CERO.";
}

?>