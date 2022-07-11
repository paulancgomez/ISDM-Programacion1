<?php

/*Ejercicio 4: Modifique el ejercicio anterior para calcular y mostrar:
a) La suma de los que son pares.
b) El producto de los que son impares.*/


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
    
    if($numero % 2 == 0){
        $sumador= $sumador + $numero;
    }else{
        $productoria= $productoria * $numero;
    }
}

echo "<br>a) La suma de todos los numeros es: $sumador<br>";
echo "b) El producto de todos los numeros es: $productoria";

?>