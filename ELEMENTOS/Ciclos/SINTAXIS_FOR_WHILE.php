<?php

/*
ESTRUCTURAS DE REPETICION O CICLICA

PARA -> FOR -> CICLO FOR -> CUANDO CONOCEMOS LA CANTIDAD DE VECES QUYE DEBEN REALIZARSE
                            UN CONJUNTO DE INSTRUCCIONES.
MIENTRAS -> WHILE -> CICLO WHILE -> CUANDO NO CONCEMOS LA CANTIDAD DE VECES QUE DEBEN REALIZARSE
                                    UN CONJUNTO DE INSTRUCCIONES
REPETIR -> DO WHILE ES SIMILAR AL WHILE.
*/
 // SINTAXIS DEL CICLO PARA O CICLO FOR
   echo "USANDO CICLO FOR <BR>";
    for ($i=1; $i <= 10; $i++)
        {
            echo "$i // ";
        }

 // SINTAXIS DEL CICLO MIENTRAS O CICLO WHILE
    echo "<BR>USANDO CICLO WHILE <BR>";
    $i=1;
    while ($i <= 10) 
        {
            echo "$i // ";
            $i++;
        }

 ?>