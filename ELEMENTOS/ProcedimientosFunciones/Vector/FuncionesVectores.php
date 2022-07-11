<?php

//DEFINICION DE FUNCIONES y PROCEDIMIENTOS

function definirTamanio(&$n){
    $n= Rand(3,6); 
    echo "N= $n<br>";
}

function cargaVector(&$vector, $n){
    for($i=0; $i<$n; $i++){
        $vector[$i] = Rand(1,100);
    }
}

function muestraVector($vector){
    echo "<br>VECTOR<br>";
    for($i=0; $i<sizeof($vector); $i++){
        echo $vector[$i] . " // ";
    }
    echo "<br>";
}

function mayor($vector){
    $mayor= $vector[0];
    for($i=0; $i<count($vector); $i++){
        if($vector[$i] > $mayor){
            $mayor= $vector[$i];
        }
    }
    return $mayor;
}

function mayorRsort($vector){
    rsort($vector);             //sort ordena el vector de mayor a menor
    return $vector[0];
}

function menor($vector){
    $menor= $vector[0];
    for($i=0; $i<count($vector); $i++){
        if($vector[$i] < $menor){
            $menor= $vector[$i];
        }
    }
    return $menor;
}

function menorSort($vector){
    sort($vector);             //sort ordena el vector de menor a mayor
    return $vector[0];
}

?>