<?php
    /*EJERCICIO 7: Escribir un programa que permita cargar 10 números en un vector y determine la posición en la que se encuentra en
    máximo valor y la posición en la que se encuentra el mínimo valor.*/

    //COMO PUEDE PASAR QUE LOS NUMEROS DE LA LISTA SE REPITAN BASTA CON QUE ENCUENTRE LA POSICION DEL PRIMER MENOR. No tengo en cuenta las ocurrencias.

    //CARGAMOS EL VECTOR.
    for($i=0; $i<10; $i++){
        $vector[$i]= Rand(1,50);
    }

    //MOSTRAMOS EL VECTOR
    echo "VECTOR<br>";
    for($i=0; $i<count($vector); $i++){
        echo $vector[$i] . " // ";
    }
    
    //DETERMINO POSICION DEL MENOR Y MAYOR
    $men= $vector[0];
    $posMen= 0;

    $may= $vector[0];
    $posMay= 0;

    for($i=1; $i<10; $i++){
        if($vector[$i] <= $men){
            $men=$vector[$i];
            $posMen=$i;
        }else if($vector[$i] >= $may){
            $may=$vector[$i];
            $posMay=$i;
        }
    }

    //MUESTRO POSICION MENOR Y MEYOR
    echo "<br>La posicion del menor de la lista es: $posMen";
    echo "<br>La posicion de mayor de la lista es: $posMay";

?>