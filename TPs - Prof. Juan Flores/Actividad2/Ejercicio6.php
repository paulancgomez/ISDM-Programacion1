<?php
/*  Ejercicio 6: Ingresar el radio de una circunferencia y calcular: perímetro de la circunferencia,
    superficie del círculo con las siguientes fórmulas
        • Pi, constante:Pi = 3.141592
        • Perímetro:P=2*Pi*R
        • Superficie:S=Pi*R^2
*/

$Pi = 3.141592; 
$R = 3;

echo "El perimetro de la circunferencia cuyo radio=" . $R . " es igual a " . 2 * $Pi * $R;
echo "<br>La superficie de la circunferencia cuyo radio=" . $R . " es igual a " . $Pi * $R * $R;

?>