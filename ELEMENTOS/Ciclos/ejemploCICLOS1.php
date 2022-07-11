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

<?php

//CALCULAR EL PROMEDIO DE N NUMEROS INGRESADOS POR EL USUARIO (Conozco la cantidad que es N).

if (isset($_POST["calcular"]))
{
    $acumulador= 0;
    $n= $_POST["n"];
    for ($i=1; $i<=$n;$i++) 
        {
            $numero= Rand(1,10);                  //Ingresamos aleatoriamente un NUMERO.
            echo "$numero // ";
            $acumulador = $acumulador + $numero;  //Vamos acumulando (sumando) los valores generados.
        }
    $promedio= $acumulador / $n;                  //Calcular el promedio.
    echo "<br>PROMEDIO = $promedio";              //Mostrar el promedio
}

?>