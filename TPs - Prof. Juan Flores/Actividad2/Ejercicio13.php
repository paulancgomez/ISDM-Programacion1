<?php
/*  Ejercicio 13:
    Escribir un programa para ingresar la nota de un examen y luego mostrar
    “Promocionado”, “Regular” o “Libre” según la nota ingresada.
*/

$nota = 10;

echo "Nota=" . $nota;

if((1 <= $nota) && ($nota <= 3)){            //NOTA ENTRE 1 Y 3
    echo "El alumno está LIBRE.";
}else if((4 <= $nota) && ($nota <= 7)){      //NOTA ENTRE 4 Y 7
    echo "El alumno está REGULAR.";
}
else if((8 <= $nota) && ($nota <= 10)){      //NOTA ENTRE 8 Y 10
    echo "El alumno está PROMOCIONADO.";
}
else{                                        //NOTA FUERA DE RANGO
    echo "Ingrese una nota valida.";
}

?>