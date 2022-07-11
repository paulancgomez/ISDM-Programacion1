<?php
//Ejercicio 1: Calcular la suma de dos valores ingresados por el usuario
/*
  una linea
  otra linea
*/

    // DEFINICION DE VARIABLES
//    $numero1= 3;
//    $numero2= 5;
    $numero1= $_POST["num1"];
    $numero2= $_POST["num2"];
    $suma= $numero1 + $numero2;
    echo "La suma es igual a:  $suma <br>";
    echo "$numero1 + $numero2= $suma";
?>