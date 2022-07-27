<?php
    /*EJERCICIO 21. Escribir un programa que permita trasponer la matriz A de M filas y N columnas y guardar en resultado en
    una matriz B. Matriz Traspuesta: se llama matriz traspuesta de A a la matriz que se obtiene cambiando
    filas por columnas. La primera fila de A es la primera columna de B, la segunda fila de A es la segunda
    columna de B, y así sucesivamente.
    */

    $N=Rand(2,5);
    echo "N= $N<br>";
    $M=Rand(2,5);
    echo "M= $M<br>";

    //CARGAMOS MATRIZ A
    for($i=0; $i<$N; $i++){
        for($j=0; $j<$M; $j++){
            $A[$i][$j]= Rand(0, 9);
        }
    }

    //MOSTRAMOS MATRIZ A
    echo "<br><br>MATRIZ A";
    for($i=0; $i<$N; $i++){
        echo "<br>";
        for($j=0; $j<$M; $j++){
            echo $A[$i][$j] . " || ";
        }
    }

    //TRANSPUESTA

    //FORMA 1: Solo funciona para matriz cuadrada
    for($i=0; $i<$N; $i++){
        for($j=0; $j<$M; $j++){
            $T[$j][$i]= $A[$i][$j];   //Guardo la matriz transpuesta en la matriz B
        }
    }

    echo "<br><br>MATRIZ A TRANSPUESTA";
    for($i=0; $i<$M; $i++){
        echo "<br>";
        for($j=0; $j<$N; $j++){
            echo $T[$i][$j] . " || ";
        }
    }

    //FORMA 2
    echo "<br><br>MATRIZ A TRANSPUESTA";
    for($j=0; $j<$M; $j++){
        echo "<br>";
        for($i=0; $i<$N; $i++){
            echo $A[$i][$j] . " || ";
        }
    }

?>