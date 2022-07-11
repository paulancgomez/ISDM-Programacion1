<!-- Ejercicio 10: Desarrolle un algoritmo que permita leer un valor cualquiera A
     y escribir si dicho número es múltiplo de Z. -->

<html>
    <head>
        <title>TP 2 - EJERCICIO 10</title>
    </head>
    <body>
        <form method = "POST" action = "Ejercicio10Form.php">
            <label> A: <label>
                <input type = "number" name = "A"><br>   
            <label> Z: <label>
                <input type = "number" name = "Z"><br>     
            <input type="submit" name="calcular" value="Calcular">
        </form>
    </body>
</html>

<?php
    if(isset($_POST["calcular"])){
        if($_POST["A"] % $_POST["Z"] == 0){
            echo 'El numero ' . $_POST["A"] . ' es multiplo de ' . $_POST["Z"];
        }else{
            echo 'El numero ' . $_POST["A"] . ' NO es multiplo de ' . $_POST["Z"];
        }
    }
?>