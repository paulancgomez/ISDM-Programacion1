<?php
    /*EJERCICIO 11. Dado un vector de N números enteros, escribir un programa que calcule:
        • La suma de los números pares y su promedio
        • La suma de los números impares y su promedio
        • La suma de los números que se encuentran en posiciones pares y su promedio
        • La suma de los números que se encuentran en posiciones impares y su promedio */


    //CARGAMOS EL VECTOR.
    $N= Rand(1, 10);
    echo "N= $N<br>";
    for($i=0; $i<$N; $i++){
        $vector[$i]= Rand(1, 20);
    }

     //MOSTRAMOS EL VECTOR.
    echo "VECTOR<br>";
    for($i=0; $i<count($vector); $i++){
        echo $vector[$i] . " // ";
    }

    //DETERMINAMOS SUMA DE PARES Y SU PROMEDIO
    $sumaPar= 0;
    $cantPar=0;

    for($i=0; $i<count($vector); $i++){
        if($vector[$i] % 2 == 0){
            $sumaPar= $sumaPar + $vector[$i];
            $cantPar++;
        }
    }
    if($cantPar != 0){                                //Chequeamos si el contador es distinto de cero. Para evitar dividir por 0.
        $promedioPar= $sumaPar / $cantPar;
        echo "<br>La suma de los numeros pares es: $sumaPar y su promedio es $promedioPar<br>";
    }
    else{
        echo "<br>No se ingresaron numeros pares.";
    }
    
    //DETERMINAMOS SUMA DE NUMEROS QUE SE ENCUENTRAN EN POSICIONES IMPARES Y SU PROMEDIO
    $sumaPosImpar= 0;
    $cantPosImpar=0;

    for($i=0; $i<$N; $i++){
        if($i % 2 != 0){
            $sumaPosImpar= $sumaPosImpar + $vector[$i];
            $cantPosImpar++;
        }
    }
    $promedioPosImpar= $sumaPosImpar / $cantPosImpar;
    echo "<br>La suma de los numeros que se encuentran en posiciones impares es: $sumaPosImpar y su promedio es $promedioPosImpar<br>";
   
?>