<?php

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

?>