<?php
    //BREAK interrumpe el ciclo y se sale de él.

    $paises = ['Mexico','Costa Rica','Paraguay','España','Ecuador','Panama'];

    foreach ($paises as $key ) {
        if ($key =='España') {
            break;
        }
        echo $key.'<br>';
    }
    
    //CONTINUE permite excluir elementos de un ciclo, al validarlos continua con el siguiente elemento.
    echo '<br>';
    foreach ($paises as $key ) {
        if ($key=='España') {
            continue;
        }
        echo $key.'<br>';
    }    
 ?>