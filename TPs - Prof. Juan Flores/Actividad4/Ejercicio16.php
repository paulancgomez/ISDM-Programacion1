<?php
    /*EJERCICIO 16. Desarrolle un programa que dada una matriz de NxN realice y muestre la suma de cada una de las filas.
    
        2 4 6 → Suma= 12
        3 9 1 → Suma= 13
        2 8 1 → Suma= 11
    */

    //CARGAMOS LA MATRIZ
    $N=$M=Rand(2,5);        //FILAS Y COLUMNAS
    echo "N= $N<br>";

    for($i=0; $i<$N; $i++){
        for($j=0; $j<$M; $j++){
            $A[$i][$j]= Rand(0, 9);
        }
    }

    //MOSTRAMOS LA MATRIZ
    echo "MATRIZ<br>";
    for($i=0; $i<$N; $i++){
        echo "<br>";
        for($j=0; $j<$M; $j++){
            echo $A[$i][$j] . " || ";
        }
    }

    //DETERMINO LA SUMA DE TODAS LAS FILAS
    for($i=0; $i<$N; $i++){
        $suma= 0;     //Se inicializa la suma por cada fila
        for($j=0; $j<$M; $j++){
            $suma= $suma + $A[$i][$j];
        }
        echo '<br>Suma de la Fila ' . ($i+1) . '= '. $suma;
    }

?>