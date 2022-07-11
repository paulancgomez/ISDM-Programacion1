<?php
    /*EJEMPLO DE MATRICES O TABLAS*/


    //CARGAMOS LA MATRIZ
    for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            $A[$i][$j]= Rand(0, 9);
        }
    }

    //MOSTRAMOS LA MATRIZ
    echo "MATRIZ<br>";
    for($i=0; $i<5; $i++){
        echo "<br>";
        for($j=0; $j<5; $j++){
            echo $A[$i][$j] . " || ";
        }
    }

?>