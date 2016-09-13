<?php
/* Los Arreglos asociativos usan etiquetas en lugar de numeros para acceder a los elementos,
   se utiliza el simbolo  => para asignar el valor  de cada etiquetas.   */

  $alumno  = array('id'=> '6765','Nombre' => 'Juan','ApellidoP' => 'Perez','ApellidoM' => 'Estrada');

  //Se puede omitir la palabra array pero se debe de usar los brackets []
  $amigo   = ['id'=>'6987','Nombre'=>'Lemuri','Apellido1'=>'Colli','Apellido2'=>'Saucedo'];

  //Asiganar un nuevo valor a la etiqueta ApellidoP
  $alumno[ApellidoP] = 'Colli';

  echo 'Los valores del alumno son <br> ';
  echo 'Clave '. $alumno[id] . '<br>';
  echo 'Nombre ' . $alumno[Nombre] . '<br>';
  echo 'Apellido Paterno ' . $alumno[ApellidoP] . '<br>';
  echo 'Apellido Materno ' . $alumno[ApellidoM] . '<br>';

  echo ' ';
  echo 'La clave de mi amigo es -> '.$amigo[id] . '<br>';

  echo 'El arreglo asociativo $amigo tiene '.count($amigo) . ' elementos <br>';

 ?>
