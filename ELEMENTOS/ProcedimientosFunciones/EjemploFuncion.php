<?php

//DEFINICION DE FUNCIONES

//Funcion con PARAMETROS POR VALOR
function suma($a, $b){ 
    $res = $a + $b;
    return $res;
}


//PROGRAMA PRINCIPAL

//Llamada a la funcion suma mandandole valores fijos.
$resultado = suma(4,6);                   
echo "4 + 6 = $resultado<br>";


//Llamada a la funcion suma mandandole valores en variables.
$n1= Rand(10,20);
$n2= Rand(10,20);
$resultado2 = suma($n1, $n2);
echo "$n1 + $n2 = $resultado2<br>";
echo "$n1 + $n2 = " . suma($n1, $n2);

?>