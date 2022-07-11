<?php
    /*EJERCICIO 18: Realice un programa que realice la suma de dos matrices de NxN.
        2 4 3     3 0 1     5 4 4
        3 3 2  +  5 4 2  =  8 7 4
        2 1 3     3 2 5     5 3 8
    */

    $N=$M=Rand(2,5);        //Matriz Cuadrada
    echo "N= $N";

    //CARGAMOS MATRIZ A
    for($i=0; $i<$N; $i++){
        for($j=0; $j<$M; $j++){
            $A[$i][$j]= Rand(0, 9);
        }
    }

     //CARGAMOS MATRIZ B
    for($i=0; $i<$N; $i++){
        for($j=0; $j<$M; $j++){
            $B[$i][$j]= Rand(0, 9);
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

    //MOSTRAMOS MATRIZ B
    echo "<br><br>MATRIZ B";
    for($i=0; $i<$N; $i++){
        echo "<br>";
        for($j=0; $j<$M; $j++){
            echo $B[$i][$j] . " || ";
        }
    }

    //SUMA DE MATRICES
    for($i=0; $i<$N; $i++){
        for($j=0; $j<$M; $j++){
            $C[$i][$j]= $A[$i][$j] + $B[$i][$j];   //C = A + B
        }
    }

    //MOSTRAMOS MATRIZ C
    echo "<br><br>MATRIZ C";
    for($i=0; $i<$N; $i++){
        echo "<br>";
        for($j=0; $j<$M; $j++){
            echo $C[$i][$j] . " || ";
        }
    }

?>