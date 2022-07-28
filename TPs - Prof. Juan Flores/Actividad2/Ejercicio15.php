<?php
/*  Ejercicio 15:
    Desarrolle un algoritmo que permita leer tres valores A, B y C y luego indique el
    menor de ellos.
*/

$A = 1;
$B = 2;
$C = 3;

echo "Sean A=" . $A . ", B=" . $B . "y C=" . $C;

if(($A < $B) && ($B < $C)){     
    echo "El menor es: $A";
}else if(($C < $B) && ($B < $A)){     
    echo "El menor es: $C";
}
else{ 
    echo "El menor es: $B";
}

?>