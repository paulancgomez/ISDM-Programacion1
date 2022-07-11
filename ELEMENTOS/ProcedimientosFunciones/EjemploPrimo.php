<?php

//Ejemplo 1: Dado un numero entero positivo determinar si el mismo es primo o no.


//DEFINICION DE FUNCIONES y PROCEDIMIENTOS

function cantDivisores($num){
    $cant= 0;
    for ($divisor=1; $divisor<=$num; $divisor++){
        if($num % $divisor == 0){
            $cant++;
        }
    }
    return $cant;
}

function esPrimo($num){ 
    if(cantDivisores($num) == 2){
        $bool=True;    //ES primo
    }else{
        $bool=False;   //NO ES primo
    }
    return $bool;
}


//PROGRAMA PRINCIPAL

$numero = Rand(1,10);

if(esPrimo($numero)){
    echo "El numero $numero es PRIMO";
}else{
    echo "El numero $numero NO es PRIMO";
}                  

?>