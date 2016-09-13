<?php
  //las variables empiezan con el signo de $, deben de empezar con una letra
  //no deben de llevar caracteres especiales y se distinge de Mayusculas y minusculas
  //NO es necesario declarar el tipo de la variable, simplemente se le asigna un valor:

  # variable de tipo cadena
  $nombre = 'lemuri';

  #variable de tipo entero
  $numero = 7;
  $Numero = 45;

  //variable de tipo Booleano
  $valor = true;

  //variable de tipo decimal
  $pi = 3.1416;

  echo $pi;

  //funcion para conocer el tipo de una variable
  echo gettype($pi);

  //trabajar con comillas simples de preferencia.
  echo "<br>";
  echo 'Hola: ' . $nombre;
  echo "<br>";
  echo "Hola: $nombre";
  echo "<br>";
  echo 'Hola: $nombre';

 ?>
