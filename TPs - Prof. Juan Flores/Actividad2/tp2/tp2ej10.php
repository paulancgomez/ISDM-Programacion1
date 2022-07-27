<html>
    <head>
        <title>Ej 10 tp2</title>
    </head>
    <body>
<!--Desarrolle un algoritmo que permita leer un valor cualquiera A y escribir si dicho
número es múltiplo de Z.-->
        <form method= "POST" action="tp2ej10.php">
            <label>A: <label>
                <input type="number" name="numero"><br>
            <label>Z:</label>
                <input type="number" name="multiplo"><br>

            <input type="submit" name="calcular" value="Calcular">
        </form>
    </body>
</html>

<?php
    if (isset($_POST["calcular"]))
        {
            $numero= $_POST["numero"];
            $multiplo= $_POST["multiplo"];
            if ($numero % $multiplo== 0)
                { echo "El numero $numero es multiplo de $multiplo"; }
            else
                {echo "El numero $numero NO es multiplo de $multiplo"; }
        }

?>