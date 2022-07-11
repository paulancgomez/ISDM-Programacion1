<!--
<html>
    <head>
        <meta charset="utf-8">
        <title>FORMULARIOS PARA EJERCICIOS</title>
    </head>
    <body>
     <form method= "POST" action="ejemploCICLOS1.php">
        <label>CANTIDAD DE NUMEROS A PROMEDIAR: <label>
            <input type="number" name="n"><br>
        <input type="submit" name="calcular" value="Promediar">
    </form>
    </body>
</html>
-->

<?php

//CALCULAR EL PROMEDIO DE LAS NOTAS DE LOS ALUMNOS (No conozco la cantidad).

    $contador= 0;
    $sumador= 0;                           //Acumulador
    $nota= Rand(-1,10);
    while ($nota > 0)                      //EN ESTE CASO SE DEJAN DE INGRESAR NOTAS CUANDO SE GENERE UNA NOTA NEGATIVA.
        {
            echo "$nota // ";
            $sumador= $sumador + $nota;    //Vamos acumulando (sumando) los valores generados.
            $contador= $contador + 1;      //Contar las notas que se generaron. $contador++ incremento el contador en una unidad.
            $nota= Rand(-1,10);            //Genero una nueva nota para evaluar la condicion del while y que esta cambie de verdadero a falso en algun momento.
        }
    if ($contador != 0)
    {
        $promedio= $sumador / $contador;   //Calcular el promedio.
        echo "<br>PROMEDIO = $promedio";   //Mostrar el promedio.
    }
    else
    {
        echo "NO SE INGRESARON NOTAS PARA PROMEDIAR.";
    }


?>