<html>
    <head>
        <title>Ej 09 tp2</title>
    </head>
    <body>
<!--Desarrolle un algoritmo que permita leer un valor cualquiera X y escribir si dicho
número es par o impar.-->
        <form method= "POST" action="tp2ej09.php">
            <label>Numero: <label>
                <input type="number" name="numero"><br>
            <input type="submit" name="calcular" value="Calcular">
        </form>
    </body>
</html>

<?php
    if (isset($_POST["calcular"]))
        {
            $numero= $_POST["numero"];
            if ($numero % 2 == 0)
                { echo "El numero $numero es PAR"; }
            else
                {echo 'El numero '.$_POST["numero"].' es IMPAR'; }
        }

?>