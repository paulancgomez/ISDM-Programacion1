<?php

/*Ejercicio 12: Dado un número entero positivo X:
a) Mostrar la cantidad de dígitos que posee.*/

//Para sacar digitos de un numero divido por 10 (DIVISION ENTERA) porque se va coriendo la coma a la izquierda.
//Dividimos por 10 porque estamos trabajando en el sistema decimal.
//Al dividir por 10, en el resto quedo el ultimo digito que es el 4.
//Si el numero es 0 tengo que mostrar que la cantidad es 1 digito

$numero = 0;  //Genero un numero del 100 al 9000
echo "Numero= $numero <br>";
$cantDig= 1;

while ($numero != 0)  //COMO LA ENTRADA ES UN NUMERO ENTERO POSITIVO. Jamas sera 0.
{
    $numero= intval($numero/10); //intval es una funcion que me devuelve la parte entera del argumento. Con la division sacamos el ultimo digito del numero.
    $cantDig++;
}

echo "<br>Cantidad de digitos: $cantDig <br>";

?>