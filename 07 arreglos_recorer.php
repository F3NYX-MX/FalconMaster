<?php

  $meses =['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

  //Se utiliza la sentencia foreach para poder recorres los elementos de un arreglo
  foreach ($meses as $indice) {
    echo '<li>'.$indice.'</li>';
  }
  echo '<br>';

  $amigos = [
      array('6765','Lemuri','Colli','Saucedo','5470464928813193','22/78','01/04/1978'),
      array('6987','Juan','Tzab','Mendez','5470464928813193','22/78','01/04/1978'),
      array('10598','Julian','Covarrubias','Cocom','5470464928813193','22/78','01/04/1978')
    ];

  //Ciclo anidado para recorres los arreglos
  foreach ($amigos as $indice) {
    foreach ($indice as $subindice) {
      echo $subindice. ', ';
    }
    echo '<br>';
  }

 ?>
