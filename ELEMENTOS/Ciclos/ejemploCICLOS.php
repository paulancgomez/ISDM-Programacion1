<!--
<html>
    <head>
        <meta charset="utf-8">
        <title>FORMULARIOS PARA EJERCICIOS</title>
    </head>
    <body>
     <form method= "POST" action="ejemploCICLOS.php">
        <label>CANTIDAD DE NUEMEROS A PROMEDIAR: <label>
            <input type="number" name="n"><br>
        <input type="submit" name="calcular" value="Promediar">
    </form>
    </body>
</html>
-->

<?php

//CALCULAR EL PROMEDIO DE 5 NUMEROS INGRESADOS POR EL USUARIO (Conozco la cantidad).
    
   $acumulador= 0;
    for ($i=1; $i<=5; $i++)
        {
            $numero= Rand(1,10);                   //Ingresamos aleatoriamente un NUMERO.
            echo "$numero // "; 
            $acumulador = $acumulador + $numero;   //Vamos acumulando (sumando) los valores generados.
        }
    $promedio= $acumulador / 5;                    //Calcular el promedio.
    echo "<br>PROMEDIO = $promedio";               //Mostrar el promedio.
?>