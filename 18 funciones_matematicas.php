<?php
    //Redondeo tomando en cuenta el punto decimal al entero mas cercano.
    $numero = 3.14159;
    echo round($numero).'<br>';

    //puede redondear y mostrar decimales, para eso es el segundo parametro
    $x = 16.89;
    echo round($x,1) . '<br>';

    //funcion random
    $aleatorio = rand(1,100);
    echo $aleatorio.'<br>';

    //redondeo exclusivamente  hacia arriba
    $arriba = ceil(12.01);
    echo $arriba.'<br>';

?>