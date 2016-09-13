<?php
//El primer elemento de un arregle empieza con el indice 0, se les conoce tambien como arreglos indexados.

//1.sintaxis normal, se usa la palabra reservada 'array' para declarar el arreglo
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');

//2.- sintaxis alterna, se usan corchetes [] para delimitar el inicio y fin de los elementos
$meses  = ['Enero','Febrero','Marzo','Abril','Mayo','Junio'];

//3.- Arreglo con iferentes tipos de datos
$amigos = array('6765','Lemuri','Colli','Saucedo','5470464928813193','22/78','01/04/1978');

//4.-Asiganar valor a elementos del arreglo
$meses[6] = 'Julio';
$meses[7] = 'Agosto';

//5.- Mostrar el contenido de un arreglo
echo($meses[7]);
echo '<br>';
echo "Arreglo de varios tipos de datos";
echo '<br>';
echo $amigos[0].'<br>';
echo $amigos[1].'<br>';
echo $amigos[2].'<br>';
echo $amigos[3].'<br>';
echo $amigos[4].'<br>';
echo $amigos[5].'<br>';
echo $amigos[6].'<br>';
echo '<br>';

//6.- Contar los elementos o indices de un arreglo
$cont = count($amigos);
echo 'El arreglo $amigos tiene '. $cont . ', indices.';


?>
