<html>
    <head>
        <title>Ej 13 tp2</title>
    </head>
    <body>
<!--Escribir un programa para ingresar la nota de un examen y luego mostrar
“Promocionado”, “Regular” o “Libre” según la nota ingresada
1 y 3 -> LIBRE
4 y 7 -> REGULAR
8 y 10 -> PROMOCIONADO.-->

        <form method= "POST" action="tp2ej13.php">
            <label>NOTA: <label>
                <input type="number" name="nota"><br>
            <input type="submit" name="calcular" value="Calcular">
        </form>
    </body>
</html>

<?php
    if (isset($_POST["calcular"]))
        {
            $nota= $_POST["nota"];
            if ($nota < 4)
                {
                    echo 'El alumno esta libre';
                } 
            else if ($nota >= 8) 
                {
                    echo 'El alumno esta promocionado';
                } 
             else {
                    echo 'El alumno es regular';
                  }
        }

?>