<?php
/*SI ES MENOR DE 10 AÑOS ES NIÑO
  SI ES MENOR DE 18 ES ADOLESCENTE
  SI ES MENOR DE 60 AÑOS ES ADULTO
  SI ES MAYOR DE 60 ES ANCIANO 
*/

    $edad = Rand(1,70); //Genera un numero aleatorio del 1 al 70
    echo "Edad: $edad<br>";

    if($edad < 10){
        echo "Sos un niño";
    } else if(($edad >= 10) && ($edad < 18)){
        echo "Sos adolescente";
    } else if(($edad >= 18) && ($edad < 60)){
        echo "Sos adulto";
    }else{
        echo "Sos anciano";
    }

?>