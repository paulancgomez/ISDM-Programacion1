<?php
    $nombre=$_POST["nombre"];
    $cantidad=$_POST["cantidad"];
    $i=1;
    while ( $i<=$cantidad)
      {
          echo "$nombre<br>";
          $i++;
      }
?> 