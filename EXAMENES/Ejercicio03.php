<?php

    /*EJERCICIO EXAMEN INTEGRADOR: En la resolucion de los ejercicios use de los conceptos de procedimientos y funciones.
    
    Ejercicio N° 3: Dada una lista de N números enteros positivos se pide determinar la cantidad de números ESPECIALES.
    Decimos que un número es ESPECIAL si es par y tiene una cantidad de dígitos impar.

    NOTA: No necesito usar vectores ya que puedo ir ingresando los numeros e ir verificando si son especiales o no. Si son especiales
    los voy contando. Asi que no necesito guardar los datos en un vector.
    __________________________________________________________________________________________________________________________________
    
    DEFINICION DE PROCEDIMIENTOS Y FUNCIONES*/

    function definirTamanio(&$n){
        $n= Rand(1,10); 
        echo "N= $n<br>";
    }

    function esPar($num){
        if($num % 2 == 0){
            $bool= True;       //Es PAR
        }
        else{
            $bool= False;      //Es IMPAR
        }
        return $bool;
    }

    function cantDigitos($num){
        $cont= 0;
        while($num != 0){
            $num = intval($num / 10);
            $cont++;
        }
        return $cont;
    }

    function esEspecial($num){
        if(esPar($num) && !esPar(cantDigitos($num))){
            $bool= True;       //Es ESPECIAL
        }
        else{
            $bool= False;      //NO es ESPECIAL
        }
        return $bool;
    }
    
    /*_________________________________________________________________________________________________________________________________
    
    PROGRAMA PRINCIPAL*/

    definirTamanio($n);

    $cont= 0;
    for($i=0; $i<$n; $i++){
        $numero= Rand(1,1000);
        echo "Numero: $numero<br>";
        if(esEspecial($numero)){
            $cont++;
        }
    }
    echo "<br>La cantidad de numeros ESPECIALES que tiene la lista es: $cont";
   

?>