<html>
    <head>
        <title>Ejemplo HELADERIA</title>
    </head>
    <body>
    <!--
        Escribe un programa que indique cuanto costará un helado en función del topping 
        que se elija.
        El helado sin topping cuesta $ 190.
        El topping de oreo cuesta $ 30.
        El topping de KitKat cuesta $ 40.50.
        El topping de brownie cuesta $ 75.
        El topping de chocolate cuesta $ 59.95.
    -->
        <form method="POST" action="EjemploHelado.php">
            <label>Seleccione el topping que quiere</label><br>
            <!--NOMBRE DE SELECT-->
            <select name="Helado">
                <!--OPCIONES DEL VALOR QUE VA A TOMAR EL NOMBRE DE SELECT--> 
                <option value="sin topping">Helado sin topping</option>
                <option value="oreo">Helado con topping de oreo</option>
                <option value="kit kat">Helado con topping de kit kat</option>
                <option value="brownie">Helado con topping de brownie</option>
                <option value="chocolate">Helado con topping de chocolate</option>
            </select><br>
            <input type="submit" value="Calcular" name="Calcular">
        </form>
    </body>

<?php
        //DEFINO VARIABLES CON LOS PRECIOS DE CADA UNO
        $helado=190;
        $oreo=30;
        $kitkat=40.50;
        $brownie=75;
        $chocolate=59.95;

        if(isset($_POST["Calcular"])) //SI EL USUARIO PULSA EL BOTON DE CALCULAR EMPIEZA A EJECUTAR
            {
                $seleccion=$_POST["Helado"];
                switch($seleccion)
                {
                    case "oreo": {  echo "El helado con $seleccion cuesta $";
                                    echo $helado + $oreo;
                                    break;
                                 }
                    case "kit kat": { echo "El helado con $seleccion cuesta $";
                                      echo $helado + $kitkat;
                                      break;
                                    }
                    case "brownie": { echo "El helado con $seleccion cuesta $";
                                      echo $helado + $brownie;
                                      break;
                                    }
                    case "chocolate": { echo "El helado con $seleccion cuesta $";
                                        echo $helado + $chocolate;
                                        break;
                                      }
                    default: { echo "El helado $seleccion cuesta $$helado"; 
                               break;
                            }
                }
            }
    ?>
</html>