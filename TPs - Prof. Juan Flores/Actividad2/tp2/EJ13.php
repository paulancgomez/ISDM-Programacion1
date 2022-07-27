<html>
    <head>
        <title>Ejercicio 13</title>
    </head>
    <body>
    <form  method="POST" action="EJ13.php">
            <label for="">Nota 1:</label>
            <input type="number" name="nota"><br>
            <input type="submit" name="calcular" value="Calcular">
            
        </form>
    </body>
</html>
<?php 
    if(isset($_POST["calcular"]))
    {
        $nota=$_POST["nota"];
        if ($nota < 4)
            {
                echo 'El alumno esta libre';
            } 
        else if (($nota >= 4) && ($nota < 8)) 
                {
                    echo 'El alumno esta regular';
                } 
             else {
                    echo 'El alumno es promocionado';
                  }
        
    }
?>