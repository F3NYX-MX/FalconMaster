<?php
  //Se utilizan las funciones sort y rsort para realizar los ordenamientos de los arreglos
  //SORT Ordenamiento ascendente
  //RSORT Ordenamiento descendente

  $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
  $numeros = [1,2,3,4,5,6,7,8,9,10,15,18,25,45,56];

  sort($meses);
  foreach ($meses as $mes) {
    echo $mes.'</br>';
  }
  echo '<br>';

  //sort($numeros);
  rsort($numeros);
  foreach ($numeros as $numero) {
    echo $numero.'<br>';
  }


 ?>
