<?php
  //******Ciclo WHILE - se ejecuta mientras las condicion sea verdadera.
  //tener cuidado con la variable que controla el ciclo ya que puede quedarse en ciclo InfiniteIterator
  //sino se afecta dentro del ciclo.

  $x = 1;
  while ($x <= 10) {
    echo '<br>'.$x;
    $x++;
  }

  $i = 20;
  while ($i >= 1) {
    echo '<br>'.$i;
    $i--;
  }

  //Recorer el arreglo con el ciclo while
  $semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
  $cont = 0;
  while ($cont < count($semana)) {
    echo '<br>'.$semana[$cont];
    $cont++;  //Para que el ciclo avance
  }

  //Recorre el arreglo pero de manera Descendente.
  echo '<br>';
  $cont = count($semana) - 1;
  while ($cont >= 0) {
    echo '<br>' . $semana[$cont];
    $cont--;
  }

  //****** Ciclo DO-While se ejecuta almenos una ves el codigo, ya que luega evalua la expresion
  // para determinar si se debe seguir ejecutando.

  echo '<br><br> DO-WHILE';
  $i = 0;
  do{
    echo '<br>'.$semana[$i];
    $i++;
  }while($i < count($semana));
  
 ?>
