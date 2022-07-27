<?php
    //Ejercicio 3. Escriba un programa que almacene en un vector los números pares del 1 al 10.

    //CARGAMOS EL VECTOR.
    $cont=1;
    while($cont <= 10){
        if($cont % 2 == 0){
            $vector[]= $cont;
        }
        $cont++;
    }

    //MOSTRAMOS EL VECTOR

    echo "VECTOR<br>";
    for($i=0; $i<count($vector); $i++){
        echo $vector[$i] . " // ";
    }

?>