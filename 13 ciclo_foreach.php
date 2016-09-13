<?php
  //FOREACH nos sirve principalmente para recorrer Arreglos.
  //Arreglo multidimensional y asociativo.
  $alumnos = [
      ['id'=>'6765','Nombre'=>'Lemuri','Apellido1'=>'Colli','Apellido2'=>'Saucedo','Nacimiento'=>'01/04/1978'],
      ['id'=>'6987','Nombre'=>'Jonathan','Apellido1'=>'Cocom','Apellido2'=>'Cruz','Nacimiento'=>'01/04/1978'],
      ['id'=>'10598','Nombre'=>'Juan','Apellido1'=>'Perez','Apellido2'=>'Ake','Nacimiento'=>'01/04/1978']
  ];

  //Ciclo para recorrer las filas y las columas de un arreglo bidimensional.
  foreach ($alumnos as $fila) {
    foreach ($fila as $columna => $valor) {
       echo $columna . '-> '.$valor . ' ';
    }
    echo '<br>';
  }  
 ?>
