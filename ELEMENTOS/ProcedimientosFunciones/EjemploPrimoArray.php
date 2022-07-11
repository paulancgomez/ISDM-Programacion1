<?php

//Ejemplo 2: Dado una lista de 20 numeros enteros positivos contar la cantidad de numeros primos que hay en la lista.


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
        $valor=True;    //ES primo
    }else{
        $valor=False;   //NO ES primo
    }
    return $valor;
}

function cantPrimos($lista){
    $cont= 0;
    for($i= 0; $i<count($lista); $i++){
        if(esPrimo($lista[$i])){
            $cont++;
        }
    }
    return $cont;
}

function cargaVector(&$lista, $n){
    for($i=0; $i<$n; $i++){
        $lista[$i] = Rand(1,100);
    }
}

function muestraVector($lista, $n){
    for($i=0; $i<$n; $i++){
        echo $lista[$i] . " // ";
    }
}

//PROGRAMA PRINCIPAL

cargaVector($lista, 20);
muestraVector($lista, 20);
echo "<br>La cantidad de primos que tiene la lista es: " . cantPrimos($lista);                 

?>