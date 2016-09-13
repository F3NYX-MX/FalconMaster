<?php
  //Evaluar los posibles resultados de una variable
  $mes = 'Enero';

  switch ($mes) {
    case 'Enero':
        echo 'Feliz año nuevo';
      break;
    case 'Febrero':
      echo 'Feliz dia de san valentin';
      break;

    //opcion para determinar cuando los valores no coinciden con ninguna opcion
    default:
        echo 'La opcion no es válida';
      break;
  }

?>
