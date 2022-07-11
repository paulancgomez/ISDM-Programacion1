<?php
    /*EJERCICIO 14. Desarrolle un programa que dada una matriz de 3x3 determine la posición en la que se encuentra el valor
    máximo. Por ejemplo: para la siguiente matriz
    
    23 24 68
    34 99 12
    25 78 89
    
    La salida sería: “El máximo valor se encuentra en la fila 2, columna 2"
    */

    //MATEMATICAMENTE SE ENCUENTRA EN LA FILA 2 Y COLUMNA 2.
    //EN PROGRAMACION SE ENCUENTRA EN LA FILA 1 Y COLUMNA 1.

    //EN CASO DE QUE EL MAYOR TENGA MAS OCURRENCIAS?

    //CARGAMOS LA MATRIZ
    for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            $A[$i][$j]= Rand(10, 99);    //Numeros de 2 digitos para que la matriz se vea cuadrada
        }
    }

    //MOSTRAMOS LA MATRIZ
    echo "MATRIZ<br>";
    for($i=0; $i<3; $i++){
        echo "<br>";
        for($j=0; $j<3; $j++){
            echo $A[$i][$j] . " || ";
        }
    }

    //DETERMINO LA POSICION DEL ELEMENTO MAYOR DE LA MATRIZ
    $may= $A[0][0];
    $filaMay= 0;
    $columnaMay= 0;

    for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            if($A[$i][$j] > $may){
                $may= $A[$i][$j];
                $filaMay= $i;
                $columnaMay= $j;
            }
        }
    }

    echo '<br>El máximo valor se encuentra en la fila ' . ($filaMay+1) . ', columna '. ($columnaMay+1);
?>