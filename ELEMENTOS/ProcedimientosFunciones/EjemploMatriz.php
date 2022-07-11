<?php

/*Ejemplo: Dada 2 matrices de NxN realice la suma de ambas

_________________________________________________________________________________________________*/

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

function sumaMatriz($A, $B, &$C, $n){
    for($i=0; $i<$n; $i++){
        for($j=0; $j<$n; $j++){
            $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
        }
    }
}

/*_________________________________________________________________________________________________

PROGRAMA PRINCIPAL*/

definirTamanio($n);

//Matriz A
echo "<br>MATRIZ A<br>";
cargaMatriz($A, $n);
muestraMatriz($A, $n);

//Matriz B
echo "<br>MATRIZ B<br>";
cargaMatriz($B, $n);
muestraMatriz($B, $n);

//Suma Matrices
sumaMatriz($A, $B, $C, $n);
echo "<br>MATRIZ C<br>";
muestraMatriz($C, $n);

?>