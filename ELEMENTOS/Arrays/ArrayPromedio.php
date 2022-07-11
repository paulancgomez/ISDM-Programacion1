<?php
    /*Dada una lista de 10 numeros enteros calcular el promedio. Luego mostrar la cantidad de valores
    de la lista que son mayores que dicho promedio.*/

    $acu= 0;

    //CARGAR EL VECTOR CON 10 NUMEROS Y ACUMULARLOS.
    for($i=0; $i<10; $i++){
        $vector[$i]= Rand(1, 50);       //Cargo el numero en el vector en la posicion i.
        $acu= $acu + $vector[$i];       //Acumulo el numero del vector que esta en la posicion i.
    }

    //MOSTRAMOS EL VECTOR
    echo "VECTOR<br>";
    for($i=0; $i<count($vector); $i++){
        echo $vector[$i] . " // ";
    }

    //CALCULO EL PROMEDIO Y CALCULO LA CANTIDAD DE VALORES DE LA LISTA MAYORES QUE PROMEDIO.
    $prom= $acu/10;
    echo "<br>Promedio= $prom";
    
    $cont= 0;

    for($i=0; $i<count($vector); $i++){
        if($vector[$i] > $prom)
            $cont++;
    }

    echo "<br>La cantidad de numeros mayores que el promedio es $cont<br>";


?>