<?php
    /*EJERCICIO 22: Escribir un programa que permita leer una matriz de N filas y N columnas y determine si la misma es o no
    simétrica. Matriz simétrica: se dice que A es simétrica si se verifica que ai,j = aj,i, pata todo valor de i y j.
    */

    //UNA MATRIZ ES SIMETRICA SI LA MATRIZ ORIGINAL ES IGUAL A SU TRANSPUESTA.
    //CONSULTA: En PHP hay alguna funcion que me permita saber si una matriz es igual a otra?

    $N=Rand(2,2);
    echo "N= $N<br>";

    //CARGAMOS MATRIZ A
    for($i=0; $i<$N; $i++){
        for($j=0; $j<$N; $j++){
            $A[$i][$j]= Rand(0, 5);
        }
    }

    //MOSTRAMOS MATRIZ A
    echo "<br><br>MATRIZ A";
    for($i=0; $i<$N; $i++){
        echo "<br>";
        for($j=0; $j<$N; $j++){
            echo $A[$i][$j] . " || ";
        }
    }

    //SIMETRICA
    $i=0;
    $j=0;
    $ban=true;                                //Si ban=true entonces A es simetrica
    while(($i < $N) && ($ban)){                  //Mejor hacer un while que un for para hacer menos interaciones
        $j=0;
        while(($j<$N) && ($ban)){
            if($A[$i][$j] != $A[$j][$i]){
                $ban=false;
            }
            $j++;
        }
        $i++;
    }
    if($ban){
        echo "<br>La matriz A es simetrica";
    }
    else{
        echo "<br>La matriz A NO es simetrica";
    }

?>