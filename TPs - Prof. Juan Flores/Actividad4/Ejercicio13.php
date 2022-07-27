<?php
    //EJERCICIO 13: Usando el ejercicio anterior recorra la matriz por filas y luego por columnas.


    //CARGAMOS LA MATRIZ
    for($i=0; $i<4; $i++){
        for($j=0; $j<5; $j++){
            $A[$i][$j]= Rand(0, 9);
        }
    }

    //MOSTRAMOS LA MATRIZ
    echo "MATRIZ<br>";

    //Recorrido por filas
    echo "<br>RECORRIDO POR FILAS<br>";
    for($i=0; $i<4; $i++){
        echo "<br>";
        for($j=0; $j<5; $j++){
            echo $A[$i][$j] . " || ";
        }
    }

    //Recorrido por columnas
    echo "<br><br>RECORRIDO POR COLUMNAS<br>";
    for($j=0; $j<4; $j++){
        echo "<br>";
        for($i=0; $i<5; $i++){
            echo $A[$j][$i] . " || ";
        }
    }

?>