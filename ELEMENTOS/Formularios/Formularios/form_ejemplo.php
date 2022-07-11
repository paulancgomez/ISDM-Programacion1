
<html>
    <head>
        <meta charset="utf-8">
        <title>FORMULARIOS PARA EJERCICIOS</title>
    </head>
    <body>
        <form method= "POST" action="form_ejemplo.php">
            <label>Numero 1: <label>
                <input type="number" name="num1"><br>
            <label> Numero 2: <label>
                <input type="text" name="num2"><br>
            <input type="submit" name="calcular" value="Calcular">
        </form>
    </body>
</html>

<?php
    if (isset($_POST['calcular']))
        {
            $numero1= $_POST["num1"];
            $numero2= $_POST["num2"];
            $suma= $numero1 + $numero2;
            echo "<br>$numero1 + $numero2= $suma";
        }
 
?>