<?php

  //TERCER PASO: Proceso

  $acumulador= 0;    //Acumulador en cero.
  $cantidad=$_POST["n"];  //Tomo la cantidad que viene a traves de la variable n que vino oculta.
   
   
   for ($i=1; $i<=$cantidad; $i++)  //Ciclo for desde 1 a la cantidad.
      {
        //$valor="num".$i;  
        $acumulador= $acumulador + $_POST["num".$i];  //En el acumulador voy sumando lo que vino posteado de la variable "num" y uso la variable i para saber num1 num2 num3 num4.
        //echo $acumulador;
        echo $_POST["num$i"]." // ";   //Muestro valor que estoy acumulando.
      }
      $promedio= $acumulador / $cantidad;  //Calculo el promedio.
    echo "<br> PROMEDIO = $promedio";    //Muestro promedio.
?> 