<?php
//Ejercicio 1: Calcular la suma de dos valores ingresados por el usuario.
    
    //FORMA 1 (RECOMENDADO)
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];

    //FORMA 2 (NO RECOMENDADO)
    $suma = $_POST["num1"] + $_POST["num2"];
    
    //SUMA
    $suma = $numero1 + $numero2;

    //MUESTRO
    echo "$suma = $numero1 + $numero2<br>";
    echo "La suma es igual a: $suma";
?>