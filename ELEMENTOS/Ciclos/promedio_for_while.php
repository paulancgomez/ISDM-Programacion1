<?php

//CALCULAR EL PROMEDIO DE UNA LISTA DE 10 NUMEROS ENTEROS.

$acumulador= 0;                                      //El acumuladore se incrementa en una cantidad variable, los valores que sumamos tienen distintos valores.
for ($i=1; $i<=10; $i++)              
  {
      $numero= Rand(1,20);
      echo "$numero // ";
      $acumulador= $acumulador + $numero;
  }
$promedio= $acumulador / 10;
echo "<br> EL PROMEDIO DE LOS VALORES DE LA LISTA ES: $promedio <br>";


//CALCULAR EL PROMEDIO DE UNA LISTA DE N NUMEROS ENTEROS.

    $cantidad= Rand(5,15);                          //Generamos la cantidad de manera aleatoria, tambien podriamos mandar el valor de la cantidad usando un formulario en HTML.
    $acumulador= 0;                                 //El acumulador se incrementa en una cantidad variable, los valores que usamos tienen distintos valores.
    for ($i=1; $i<=$cantidad; $i++)
      {
          $numero= Rand(1,20);
          echo "$numero // ";
          $acumulador= $acumulador + $numero;
      }
    $promedio= $acumulador / $cantidad;
    echo "<br> EL PROMEDIO DE LOS VALORES DE LA LISTA ES: $promedio <br>";   


// CALCULAR EL PROMEDIO DE UNA LISTA DE NUMEROS ENTEROS POSITIVOS

    $acumulador= 0;                                 //El acumulador se incrementa en una cantidad variable, los valores que sumamos tienen distintos valores.
    $cont= 0;                                       //En este caso agregamos un contador porque no sabemos cuantos numeros se van a generar hasta que aparezca un numero nagativo. El contador se incrementa siempre en un valor fijo.
    $numero= Rand(-5,20);                           //Generamos el primer valor para poder evaluar la condicion del ciclo WHILE. Ponemos un rango de valores positivos y negativos para que en algun momento se genere un valor negativo que nos indique que finaliza el ingreso de valores a la lista.
    while ($numero > 0)                             //En este caso no sabemos la cantidad de valores que tiene la lista pero si sabemos como son los numeros de la lista, en este caso todos positivos, con lo cual una condicion para finalizar el ingreso de valores podria ser el ingreso de un numero negativo.
      {
          echo "$numero // ";
          $cont++;                                  //Incrementamos el valor del contador.
          $acumulador= $acumulador + $numero;
          $numero= Rand(-5,20);                     //Generamos un nuevo numero para modificar el valor del mismo y de esta manera hacer que en algun momento la condicion del ciclo while cambie y se haga falsa para evitar de caer en un ciclo infinito.
      }
    $promedio= $acumulador / $cont;
    echo "<br> EL PROMEDIO DE LOS VALORES DE LA LISTA ES: $promedio <br>"; 
?> 