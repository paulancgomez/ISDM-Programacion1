<?php
//DEFINICION DE FUNCIONES y PROCEDIMIENTOS

function definirTamanio(&$n){
    $n= Rand(3,6); 
}

function cargaMatriz(&$matriz, $n){
    for($i=0; $i<$n; $i++){
        for($j=0; $j<$n; $j++){
            $matriz[$i][$j] = Rand(10,99);
        }
    }
}

function muestraMatriz($matriz, $n){
    for($i=0; $i<$n; $i++){
        echo "<br>";
        for($j=0; $j<$n; $j++){
            echo $matriz[$i][$j] . " || ";
        }
    }
    echo "<br>";
}

function sumaMatriz($A, $B, $C, &$D, $n){
    for($i=0; $i<$n; $i++){
        for($j=0; $j<$n; $j++){
            $D[$i][$j] = $A[$i][$j] + $B[$i][$j] + $C[$i][$j];
        }
    }
}

?>