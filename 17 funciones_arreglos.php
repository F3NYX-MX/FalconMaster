<?php

    //********EXTRACT extrae los elementos de un arreglo asociativo, convirtiendo cada     
    //etiqueta en una variable accediendo a los valores tambien.

    $amigo = ['id'=>'6765','nombre'=>'Lemuri','apellido1'=>'Colli'];
    extract($amigo);
    echo $id. ' '. $nombre. ' '.$apellido1.'<br>' ;   //variables recien extraidas


    //*******array_push agrega uno o mas elementos al final de un arreglo.
    $semana = ['lunes','martes','miercoles','jueves'];    
    array_push($semana,'viernes','sabado','domingo');
    print_r($semana);
    

    //*******array_pop elimina el ultimo elemento de un array
    $ultimo = array_pop($semana);
    echo '<br>';
    print_r($semana);
    echo '<br>';
    print_r($ultimo);
    echo '<br>';
    echo count($semana).'<br>';

    array_push($semana,'domingo');


    //*******array_reverse cambia el orden de los indices de un arreglo, lo estable en sentido inverso
    $semana_reversa = array_reverse($semana);
    print_r($semana_reversa);

    
    //*******SORT Ordena de manera alfabetica o ascendentemente un arreglo
    sort($semana);
    echo '<br>';
    print_r($semana);
    
?>