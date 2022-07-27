<!-- Ejercicio 13: Escribir un programa para ingresar la nota de un examen y luego mostrar
“Promocionado”, “Regular” o “Libre” según la nota ingresada.
Entre 1 y 3 -> LIBRE
Entre 4 y 7 -> REGULAR
Entre 8 y 10 -> PROMOCIONADO -->

<!-- PREGUNTA: Si hago que el input sea de tipo number solo me permite ingresar enteros. Entonces?
               Hace falta un control si el numero esta fuera del rango? -->

<html>
    <head>
        <title>TP2 - EJERCICIO 13</title>
    </head>
    <body>
        <form method = "POST" action = "Ejercicio13Form.php">
            <label> NOTA: <label>
                <input type = "text" name = "nota"><br>    <!--EL INPUT TIENE QUE SER TIPO text PARA QUE INGRESE NUMEROS ENTEROS Y DECIMALES-->
            <input type="submit" name="calcular" value="Calcular">
        </form>
    </body>
</html>

<?php
    if(isset($_POST["calcular"])){

        $nota = $_POST["nota"];

        if((1 <= $nota) && ($nota <= 3)){            //NOTA ENTRE 1 Y 3
            echo "El alumno está LIBRE.";
        }else if((4 <= $nota) && ($nota <= 7)){      //NOTA ENTRE 4 Y 7
            echo "El alumno está REGULAR.";
        }
        else if((8 <= $nota) && ($nota <= 10)){      //NOTA ENTRE 8 Y 10
            echo "El alumno está PROMOCIONADO.";
        }
        else{                                        //NOTA FUERA DE RANGO
            echo "Ingrese una nota valida.";
        }
    }
?>