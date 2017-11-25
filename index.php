<?php
  $contador = 1;
  $limite = 1000000;
  $tiempo_inicio = microtime(true);
  while($contador < $limite){
      echo $contador . ' - ';
      $contador++;
  }
  $tiempo_fin = microtime(true);
  echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio);
?>
