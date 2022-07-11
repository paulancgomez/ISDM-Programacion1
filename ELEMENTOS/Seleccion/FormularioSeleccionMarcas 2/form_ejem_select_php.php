<!-- ES EXACTAMENTE EL MISMO QUE form_ejemplo_select.html PERO ACA TENGO TODO EN UN ARCHIVO PHP -->

<html>
    <head>
        <title>
        Ejercicio
        </title>
    </head>
<body>

        <form action="form_ejem_select_php.php" method="POST">
            <label>Seleccione un auto:</label>

            <select name="marcas">
              <option value="Ninguna">Ninguna</option>
              <option value="Fiat">Fiat</option>
              <option value="Renault">Renault</option>
              <option value="Peugeot">Peugeot</option>
              <option value="Chevrolet">Chevrolet</option>
            </select>
            
            <input type="submit" name="enviar" value="SELECCIONAR">
        </form>
        
<?php
    if (isset($_POST["enviar"])) //SI FUE PULSADO EL BOTON DE ENVIO ENTONCES...
        {
          $marca=$_POST["marcas"];
          if ($marca == "Fiat")
           {
             echo "Usted seleccionó la marca: FIAT";
           }
          else if ($marca == "Renault")
                    {
                        echo "Usted seleccionó la marca: RENAULT";
                    }
                else if ($marca == "Peugeot")
                        {
                            echo "Usted seleccionó la marca: PEUGEOT";
                        }
                     else if ($marca == "Chevrolet")
                            {
                                echo "Usted seleccionó la marca: CHEVROLET";
                            }
                          else
                            {
                                echo "Usted NO seleccionó ninguna marca";
                            }

            echo "<br><br>";
            switch ($marca)
                {
                case "Fiat":
                  echo "A ti te gusta la marca FIAT";
                  break;
                case "Renault":
                  echo "A ti te gusta la marca RENAULT";
                  break;
                case "Peugeot":
                  echo "A ti te gusta la marca PEUGEOT";
                  break;
                case "Chevrolet":
                 echo "A ti te gusta la marca CHEVROLET";
                 break;
                default:
                  echo "NO seleccionaste ninguna marca";
              }

    }
        
?>




</body>
</html>