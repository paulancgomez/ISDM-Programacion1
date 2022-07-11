<!--FORMULARIO QUE SE LLAMA ASI MISMO PORQUE TENGO FORMULARIO Y ARCHIVO QUE PROCESA LOS DATOS EN UNO SOLO-->

<!--CODIGO HTML-->
<html>
    <head>
        <meta charset = "utf-8">
        <title>FORMULARIOS PARA EJERCICIOS</title>
    <!--CUERPO DE MI HTML-->
    </head>
    <body>
        <!--FORMULARIO-->
        <form method = "POST" action = "formularioArchivo.php">
            <label> Numero 1: <label>
                <input type = "text" name = "num1"><br>
            <label> Numero 2: <label>
                <input type = "text" name = "num2"><br>
            <input type="submit" name="calcular" value="Calcular">
        </form>
        <!--FIN FORMULARIO-->
    </body>
    <!--FIN CUERPO DE MI HTML-->
<html>

<!--CODIGO PHP-->
<?php
    if(isset($_POST['calcular'])){ //CUANDO EL BOTON QUE SE LLAMA calcular FUE APRETADO HAGO LO SIGUIENTE
        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
        $suma = $numero1 + $numero2;
        echo "<br>$numero1 + $numero2 = $suma";
    }
?>

