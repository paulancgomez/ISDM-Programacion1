<?php
/*  Ejercicio 16:
    Escribir un algoritmo que lea los nombres y edades de dos personas e imprima cuál
    de ellas tiene más edad o si son de la misma edad.
*/

$Persona1 = 'Olivia';
$edad1= 13;

$Persona2 = 'Emma';
$edad2 = 14;

if(($A < $B) && ($B < $C)){     
    echo "El menor es: $A";
}else if(($C < $B) && ($B < $A)){     
    echo "El menor es: $C";
}
else{ 
    echo "El menor es: $B";
}

?>