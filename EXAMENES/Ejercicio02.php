<?php

    /*EJERCICIO EXAMEN INTEGRADOR: En la resolucion de los ejercicios use de los conceptos de procedimientos y funciones.
    
    Ejercicio N° 2: Se dice que un número es ESPECIAL si es par y tiene una cantidad de dígitos impar.
    Dado un número entero positivo determinar si el mismo es ESPECIAL.

    __________________________________________________________________________________________________________________________________
    
    DEFINICION DE PROCEDIMIENTOS Y FUNCIONES*/

    function definirNumero(&$num){
        $num= Rand(1,10000); 
        echo "N= $num<br>";
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

    definirNumero($numero);
   
    if(esEspecial($numero)){
        echo "El numero $numero es ESPECIAL";
    }else{
        echo "El numero $numero NO es ESPECIAL";
    }
   

?>