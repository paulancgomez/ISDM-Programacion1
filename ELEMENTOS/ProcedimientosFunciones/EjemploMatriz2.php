<?php

/*Ejemplo: Dada 3 matrices de NxN realice la suma de las tres

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

function sumaMatriz($A, $B, $C, &$D, $n){
    for($i=0; $i<$n; $i++){
        for($j=0; $j<$n; $j++){
            $D[$i][$j] = $A[$i][$j] + $B[$i][$j] + $C[$i][$j];
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

//Matriz C
echo "<br>MATRIZ C<br>";
cargaMatriz($C, $n);
muestraMatriz($C, $n);

//Suma Matrices
sumaMatriz($A, $B, $C, $D, $n);
echo "<br>MATRIZ D<br>";
muestraMatriz($D, $n);

?>