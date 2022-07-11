<?php

    $nombre=$_POST["nombre"];
    $cantidad=$_POST["cantidad"];
   
    for ($i=1; $i<=$cantidad; $i++)
      {
          echo "$nombre<br>";
      }

?> 