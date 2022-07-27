<?php

/*Ejercicio 6: Dada una lista de N números ingresados por teclado, calcular y mostrar:
a) El promedio de todos los números ingresados.
b) El promedio de los positivos*/

//PREGUNTA: Como hago para que el promedio en a) me de positivo? Como se hace el valor absoluto en php?
//          En el caso que no se genere ningun numero positivo entonce el contador es 0 y al calcular el promedio estoy dividiendo por cero y eso genera error. Hay que hacer un control ahi: Si el contador es igual a 0 entonces mostrar un cartel que no se ingresaron numeros positivos o el promedio es cero. Y sino mostrar el promedio normal.


//GENERO LA CANTIDAD DE MANERA ALEATORIA DE 1 A 20
$n = Rand(1,20);
echo "Cantidad N= $n <br>";

/*CANTIDAD DESDE UN FORMULARIO
$n = $_POST["n"];
*/

$sumador= 0;       //Neutro de la suma

$sumadorPos= 0;
$contadorPos= 0;

for ($i=1; $i<=$n; $i++)
{
    $numero= Rand(-10,-1);
    echo "$numero // "; 
    $sumador= $sumador + $numero;
    if($numero > 0){
        $sumadorPos= $sumadorPos + $numero;
        $contadorPos++; //$contador= $contador + 1;
    }
}
$promedio= $sumador / $n;
$promedioPos= $sumadorPos / $contadorPos;

echo "<br>a) La promedio de todos los numeros ingresados es: $promedio<br>";
echo "b) El promedio de todos los positivos es: $promedioPos";

?>