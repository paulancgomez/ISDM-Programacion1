<?php
    //Ejercicio 8: Escribir un programa que almacene en un vector los números primos comprendidos entre 1 y 100;

    //Es primo si tiene solo dos divisores


    //DETERMINO PRIMOS Y CARGAMOS EL VECTOR.
    for($num=1; $num<=100; $num++){                        //Evaluamos cada uno de los numeros para ver si son primos, en el caso de serlo lo guardamos en el vector.
        $cont=0;                                           //Cuento la cantidad de divisores
        for($divisor=1; $divisor <= $num; $divisor++){         //Chequeamos si el numero es primo
            if($num % $divisor == 0){
                $cont++;
            }
        }
        if($cont == 2){
            $primos[]= $num;
        }
    }

    //MOSTRAMOS EL VECTOR DE PRIMOS
    echo "VECTOR<br>";
    for($i=0; $i<count($primos); $i++){
        echo $primos[$i] . " // ";
    }

?>