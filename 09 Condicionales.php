<?php
  //* ****** IF para evaluar condiciones

  $edad = 19;
  $nombre = 'Carlos';

  if ($edad == 18 && $nombre =='Carlos'){
    echo 'Se cumple la condicion';
  }
  else{
    echo 'No se cumple la 1er Condicion';
  }

  if($edad >= 18 || $nombre =='Carlos'){
    echo '<br> Se cumple Condicion 2';
  }
  else {
    echo 'No se cumple la segunda Condicion';
  }

  //Shorthand IF   (condiciones) ? true : false ;
  $edad =  (isset($edad)) ? $edad : 'El usuario no establecio su edad';

  //Equivale a:
  if (isset($edad)) {
  	$edad = $edad;
  }
  else {
  	$edad = 'El usuario no establecio su edad';
  }

  echo '<br>'.$edad.'<br>';

  // elseif
  $peso = 101;

  if($peso <= 100 ){
    echo 'EL peso es correcto'.'<br>';
  } else if($peso > 100){
    echo 'Debes de bajar de peso'.'<br>';
  }



 ?>
