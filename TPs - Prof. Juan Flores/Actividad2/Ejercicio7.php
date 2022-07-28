<?php
/*  Ejercicio 7:
    Un profesor desea saber el porcentaje varones y mujeres de su clase sabiendo que
    tiene N alumnos en total, CV varones y CM mujeres.*/

$CM = 13;
$CV = 10;

$N = $CV + $CM;

echo "El porcentaje mujeres de la clase es " . ($CM * 100)/ $N . "% y el porcentaje varones es " . ($CV * 100)/ $N . "%";

?>

