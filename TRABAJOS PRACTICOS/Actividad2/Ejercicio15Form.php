<!--Ejercicio 15: Desarrolle un algoritmo que permita leer tres valores A, B y C y luego indique el
menor de ellos. Suponiendo que A, B, C son distintos-->

<html>
    <head>
        <title>TP2 - EJERCICIO 15</title>
    </head>
    <body>
        <form method = "POST" action = "Ejercicio15Form.php">
            <label> A: <label>
                <input type = "text" name = "a"><br>
            <label> B: <label>
                <input type = "text" name = "b"><br>
            <label> C: <label>
                <input type = "text" name = "c"><br>
            <input type="submit" name="calcular" value="Calcular">
        </form>
    </body>
</html>

<?php
    if(isset($_POST["calcular"])){

        $A = $_POST["a"];
        $B = $_POST["b"];
        $C = $_POST["c"];

        if(($A < $B) && ($B < $C)){     
            echo "El menor es: $A";
        }else if(($C < $B) && ($B < $A)){     
            echo "El menor es: $C";
        }
        else{ 
            echo "El menor es: $B";
        }
    }
?>