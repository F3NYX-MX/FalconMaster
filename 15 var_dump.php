<?php
    //var_dump funcion que nos sirve para desplegar el tipo y valor de una variable.
    //print_r funcion que despliega informacion de las variables, es mas legible pero muestra menos informacion

    $num = 45;
    $amigo = ['Nombre'=>'Lemuri','Apellido'=>'Colli'];
    $numeros =[0,1,2,3,4,5,6,7,8,9,10];
    $bandera = false;
    $dato = '56';

    var_dump($num);   //int(45)  es tipo entero y tiene el valor 45.

    var_dump($amigo); // array(2) {["Nombre"]=>string(6) "Lemuri" ["Apellido"]=> string(5) "Colli"}
   
    var_dump($dato);  // string(2) "56"   tipo cadena de tamaño 2 y valor '56'

    var_dump($numeros); //array(11) {[0]=> int(0) [1]=> int(1) [2]=> int(2) [3]=> int(3) [4]=> int(4) [5]=> int(5) [6]=> int(6) [7]=> int(7) [8]=> int(8) [9]=> int(9) [10]=> int(10) }

    echo '<br>';
    print_r($amigo);   // Array ( [Nombre] => Lemuri [Apellido] => Colli )
    echo '<br>';
    print_r($numeros); //Array ([0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 [6] => 6 [7] => 7 [8] => 8 [9] => 9 [10] => 10 )
    echo '<br>';
    print_r($dato);  // 56

?>