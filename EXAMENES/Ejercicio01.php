<?php

    /*EJERCICIO EXAMEN INTEGRADOR: En la resolucion de los ejercicios use de los conceptos de procedimientos y funciones.
    
    Ejercicio N° 1: Dada una lista con las alturas de N alumnos de un curso. Se pide mostrar aquellas alturas que sean mayores que la
    altura promedio del curso.

    __________________________________________________________________________________________________________________________________
    
    DEFINICION DE PROCEDIMIENTOS Y FUNCIONES*/

    function definirTamanio(&$n){
        $n= Rand(1,10); 
        echo "N= $n<br>";
    }

    function cargaVector(&$vector, $n){
        for($i=0; $i<$n; $i++){
            $vector[$i]= Rand(150,210);
        }
    }

    function muestraVector($vector){
        echo "<br>VECTOR<br>";
        for($i=0; $i<count($vector); $i++){
            echo $vector[$i] . " || ";
        }
        echo "<br>";
    }

    function calcularPromedio($vector){
        for($i=0; $i<count($vector); $i++){
            $suma= $suma + $vector[$i];
        }
        $promedio= $suma / count($vector);
        echo "<br><br>ALTURA PROMEDIO: $promedio"; //AUNQUE NO SE PIDE
        return $promedio;
    }
    
    function muestraMayorQue($vector, $may){
        $bool=False;
        echo "<br><br>ALTURAS MAYORES QUE LA ALTURA PROMEDIO: <br>";
        for($i=0; $i<count($vector); $i++){
            if($vector[$i] > $may){
                echo $vector[$i] . " || ";
                $bool=True;
            }   
        }
        if(!$bool){
            echo "No existe altura mayor que la Altura Promedio.";
        }   
    }

    /*_________________________________________________________________________________________________________________________________
    
    PROGRAMA PRINCIPAL*/

    definirTamanio($n);
    cargaVector($alturas, $n);
    muestraVector($alturas, $n);
    
    $promedio= calcularPromedio($alturas);

    muestraMayorQue($alturas, $promedio);

?>