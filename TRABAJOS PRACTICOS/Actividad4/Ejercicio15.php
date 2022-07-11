<?php
    //EJERCICIO 15: Igual al anterior, pero teniendo en cuenta ahora que la matriz es de NxM, donde N y M son valores ingresados por el usuario.

    //EN CASO DE QUE EL MAYOR TENGA MAS OCURRENCIAS?

    //CARGAMOS LA MATRIZ
    $N=Rand(2,5);        //FILAS
    echo "N= $N<br>";
    $M=Rand(2,5);        //COLUMNAS
    echo "M= $M<br>";

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

    //DETERMINO LA POSICION DEL ELEMENTO MAYOR DE LA MATRIZ
    $may= $A[0][0];
    $filaMay= 0;
    $columnaMay= 0;

    for($i=0; $i<$N; $i++){
        for($j=0; $j<$M; $j++){
            if($A[$i][$j] > $may){
                $may= $A[$i][$j];
                $filaMay= $i;
                $columnaMay= $j;
            }
        }
    }

    echo '<br>El máximo valor se encuentra en la fila ' . ($filaMay+1) . ', columna '. ($columnaMay+1);
?>