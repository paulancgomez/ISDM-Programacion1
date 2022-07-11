<html>
    <!--Ejercicio 5: Escribir un algoritmo para cada uno de los siguientes puntos. Dada una lista de N
        números ingresados por el usuario, calcular y mostrar:
    a) La cantidad de números múltiplo de 3.
    b) La cantidad de números múltiplo de 2.
    c) La cantidad de números positivos.
    d) La cantidad de números negativos.-->

    <head>
        <meta charset="utf-8">
        <title>TP3 - EJERCICIO 5</title>
    </head>
    <body>
    <h3>
        Ejercicio 5: Escribir un algoritmo para cada uno de los siguientes puntos. Dada una lista de N números ingresados por el usuario, calcular y mostrar: <br>
        a) La cantidad de números múltiplo de 3. <br>
        b) La cantidad de números múltiplo de 2. <br>
        c) La cantidad de números positivos. <br>
        d) La cantidad de números negativos. <br>
    </h3>
            <form method= "POST" action= Ejercicio05.php>
                <label>Cantidad: <label>
                    <input type="number" name="cantidad"><br>
                        <input type="submit" name="calcular" value="Calcular"><br>
            </fomr>
    </body>
</html>

<?php

if(isset($_POST["calcular"])){
    $cantMult2= 0;
    $cantMult3= 0;
    $cantPos= 0;
    $cantNeg= 0;

    $N= $_POST["cantidad"];
    for($i=1; $i<=$N; $i++){
        $num= rand(-10,10);
        echo "$num // ";
        if($num % 2 == 0){  //SI ES MULTIPLO DE 2
            $cantMult2++;
        }
        if($num % 3 == 0){  //SI ES MULTIPLO DE 3
            $cantMult3++;
        }
        if($num > 0){
            $cantPos++;
        }else if($num < 0){
            $cantNeg++;
        }

    }

    echo "<br>La cantidad de numeros multiplo de 2 es: $cantMult3<br>";
    echo "<br>La cantidad de numeros multiplo de 3 es: $cantMult2<br>";
    echo "<br>La cantidad de numeros positivos es: $cantPos<br>";
    echo "<br>La cantidad de numeros negaivos de 3 es: $cantNeg<br>";

}

?>