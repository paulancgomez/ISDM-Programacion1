<?php
/*  Ejercicio 8:
    Escribir un programa que permita ingresar la edad en años de una persona y luego mostrar “Sos mayor de edad” o
    “No sos mayor de edad” según la edad ingresada.*/

    $edad = Rand(1,50); //Genera un numero aleatorio del 1 al 50
    echo "Edad: $edad<br>";

    if($edad >= 18){
        echo "Sos mayor de edad";
    }else{
        echo "No sos mayor de edad";
    }

?>