<?php

//Ejemplo: Dada 3 matrices de NxN realice la suma de las tres

include 'funcionesMatrices.php';
//require 'funcionesMatrices.php';

//PROGRAMA PRINCIPAL

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