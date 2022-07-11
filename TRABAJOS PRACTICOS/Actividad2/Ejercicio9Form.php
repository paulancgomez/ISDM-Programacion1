<!-- Ejercicio 9: Desarrolle un algoritmo que permita leer un valor cualquiera X y escribir si dicho
número es par o impar. -->

<html>
    <head>
        <title>TP2 - EJERCICIO 9</title>
    </head>
    <body>
        <form method = "POST" action = "Ejercicio9Form.php">
            <label> Numero: <label>
                <input type = "number" name = "numero"><br>       
            <input type="submit" name="calcular" value="Calcular">
        </form>
    </body>
</html>

<?php
    if(isset($_POST["calcular"])){
        if($_POST["numero"] % 2 == 0){
            echo 'El numero ' . $_POST["numero"] . ' es PAR';
        }else{
            echo 'El numero ' . $_POST["numero"] . ' es PAR';
        }
    }
?>

