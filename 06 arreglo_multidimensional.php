<?php
  //Arreglos Multidensionales, consiste en definir cada elemento del arreglo como un arreglo,
  // es decir arreglos anidados

  $amigos = [
      array('6765','Lemuri','Colli','Saucedo','5470464928813193','22/78','01/04/1978'),
      array('6987','Juan','Tzab','Mendez','5470464928813193','22/78','01/04/1978'),
      array('10598','Julian','Covarrubias','Cocom','5470464928813193','22/78','01/04/1978')
    ];

  echo $amigos[0][1].' '; echo $amigos[0][2].'<br>';
  echo $amigos[1][1].' '; echo $amigos[1][2].'<br>';
  echo $amigos[2][1].' '; echo $amigos[2][2].'<br>';

  //Arreglo multidimensional y asociativo, sin usar la palabra reservada array.
  $alumnos = [
      ['id'=>'6765','Nombre'=>'Lemuri','Apellido1'=>'Colli','Apellido2'=>'Saucedo','Nacimiento'=>'01/04/1978'],
      ['id'=>'6987','Nombre'=>'Jonathan','Apellido1'=>'Cocom','Apellido2'=>'Cruz','Nacimiento'=>'01/04/1978'],
      ['id'=>'10598','Nombre'=>'Juan','Apellido1'=>'Perez','Apellido2'=>'Ake','Nacimiento'=>'01/04/1978']
    ];

  echo '<br>';
  echo $alumnos[0][Nombre].' '; echo $alumnos[0][Apellido1].' '; echo $alumnos[0][Apellido2].' '; echo $alumnos[0][Nacimiento].'<br>';
  echo 'El arreglo $amigos tiene '.count($amigos).' arreglos anidados. <br>';


 ?>
