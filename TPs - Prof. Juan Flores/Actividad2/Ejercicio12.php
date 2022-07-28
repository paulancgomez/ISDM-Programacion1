<?php
/*  Ejercicio 12:
    Desarrolle un algoritmo que permita leer dos valores A y B y que escriba cuál es el
    mayor.
*/

$A = 10;
$B = 10;

if($A > $B){
    echo "El MAYOR entre A=" . $A . " y B=" . $B . " es " . $A;
}else if($B > $A){
    echo "El MAYOR entre A=" . $A . " y B=" . $B . " es " . $B;
}else{
    echo "Los valores A=" . $A . " y B=" . $B . " son IGUALES.";
}

?>