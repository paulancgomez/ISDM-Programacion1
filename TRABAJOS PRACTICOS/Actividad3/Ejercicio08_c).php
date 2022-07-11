<?php

/*Ejercicio 8: Desarrollar un programa para cada uno de los siguientes puntos:
c) Ingresar un entero X e indicar si es primo o no (Un número es primo cuando solo tiene 2
divisores. Utilice un “contador”) */

//Un numero es primo cuando solo tiene 2 divisores.

//GENERO EL NUMERO DEL 1 AL 100
$numero = Rand(1,100);
echo "Numero= $numero <br>";

$cantidadDiv= 0;
/*CANTIDAD DESDE UN FORMULARIO
$n = $_POST["n"];
*/

for ($divisor=1; $divisor<=$numero; $divisor++)
{
    if($numero % $divisor == 0){
        echo "$divisor // ";  //No me pide
        $cantidadDiv++;
    }
}
if($cantidadDiv == 2){
    echo "<br>El numero $numero es PRIMO";
}else{
    echo "<br>El numero $numero NO es PRIMO";
}

?>