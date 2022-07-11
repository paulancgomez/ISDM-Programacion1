<?php

//DEFINICION DE PROCEDIMIENTOS

function saludo(){
    echo "Hola, como estas?<br>";
}

//Procedimiento con PARAMETROS POR VALOR
function suma($a, $b){ 
    $suma = $a + $b;
    echo "$a + $b = $suma<br>";
}

//Procedimiento con PARAMETROS POR VALOR y PARAMETROS POR VARIABLE (o por referencia)
function suma2($a, $b, &$res){ 
    $res = $a + $b;
}

//PROGRAMA PRINCIPAL

saludo();                        //llamada al procedimiento saludo().

suma(4,6);                       //llamada al procedimiento suma mandandole valores fijos.

$n1= Rand(10,20);
$n2= Rand(10,20);
suma($n1, $n2);                  //llamada al procedimiento suma mandandole variables.

suma2($n1, $n2, $suma);           //llamada al procedimiento suma2 mandandole la variable $sum por referencia
echo "$n1 + $n2 = $suma<br>";

?>