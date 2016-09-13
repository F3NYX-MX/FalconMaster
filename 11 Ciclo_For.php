<?php
  //Ciclo for
  for ($i = 1; $i <= 10 ; $i++){
    echo $i . '<br>';
  }

  for ($i=10; $i >=1 ; $i--){
    echo $i . '<br>';
  }

  for($i=0; $i<= 100; $i+=5){
    echo $i . '<br>';
  }

  //recorre el arreglo con el ciclo FOR
  $semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
  
  for ($i=0; $i < count($semana); $i++) {
    echo '<br>'.$semana[$i];
  }

 ?>
