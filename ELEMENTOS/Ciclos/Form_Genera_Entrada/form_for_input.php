<!--FORMULARIO LLAMADO form_for_input.php-->

<!--PRIMER PASO: FORMULARIO PARA QUE ME DIGA LA CANTIDAD-->

<html>
    <head>
        <meta charset="utf-8">
        <title>FORMULARIOS PARA EJERCICIOS</title>
    </head>
    <body>
     <form method= "POST" action="form_for_input.php">
        <label>Cantidad de numeros de la lista: <label>   <!--LE PIDO LA CANTIDAD DE ELEMENTOS QUE TIENE MI LISTA-->
            <input type="number" name="cantidad"><br>     <!--Pongo la cantidad en un input llamado "cantidad"-->
        <input type="submit" name="Generar" value="Generar">    <!--Y al boton submit lo voy a llamar Generar (name = "Generar")-->
</form>
    </body>
</html>

<!--SEGUNO PASO: EN FUNCION AL PRIMER FORMULARIO GENERAR OTRO FORMULARIO CON TANTAS ENTRADAS DE TEXTO COMO VALORES TENGA EN MI LISTA-->

<?php
    if (isset($_POST['Generar']))       //Cuando se pulse el boton definido por el boton Generar.. lo que tengo que hacer es generar el formulario para que yo ingrese los n numeros que quiero promediar.
        {
            $n= $_POST['cantidad'];   //Tomo la cantidad
            echo "<form method= 'POST' action='calcular_promedio.php'>";  //Aca estoy embebiendo codigo HTML dentro de PHP. Armamos el formulario que va a llamar a traves del metodo POST al archivo calcular_promedio.php
            for ($i=1; $i<=$n; $i++)     //Con el ciclo for desde 1 hasta la cantidad n de elementos que tiene mi lista..
                {
                    echo "<label>Numero $i: <label>";   //Voy a generar label: Numero 1 (cuando i=1), Numero 2, Numero 3, Numero 4... Numero n.
                    echo "<input type='number' name=num$i><br>";  //En el nombre voy a poner la palabra num y le voy a adiccionar el valor de i: num1, num2,...num(n)
                }
            echo "<input type='hidden' name='n' value=$n>";  //Voy a mandar oculto (hidden es para enviar valores en variables ocultas) en una variable n voy a mandar el valor de la cantidad que es $n.
            echo "<input type='submit' name='calcular' value='Calcular Promedio'>"; //Y cuando haga click en Calcular Promedio me va llamar a otro archivo php (calcular_promedio.php TERCER PASO).
            echo "</form>";
        }
?>