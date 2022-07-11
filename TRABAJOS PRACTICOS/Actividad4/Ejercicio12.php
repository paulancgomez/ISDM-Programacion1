<?php
    /*EJERCICIO 12: Desarrolle programa que permita cargar una matriz de 4 filas por 4 columnas
      con números enteros y luego muestre el contenido de la misma.*/


    //CARGAMOS LA MATRIZ
    for($i=0; $i<4; $i++){
        for($j=0; $j<5; $j++){
            $A[$i][$j]= Rand(0, 9);
        }
    }

    //MOSTRAMOS LA MATRIZ
    echo "MATRIZ<br>";
    for($i=0; $i<4; $i++){
        echo "<br>";
        for($j=0; $j<5; $j++){
            echo $A[$i][$j] . " || ";
        }
    }

?>