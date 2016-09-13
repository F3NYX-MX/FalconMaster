<?php

    function area($base,$altura){
        $resultado = ($base * $altura) / 2;
        return $resultado;
    }

    $x = area(10,15);
    echo 'El area del triangulo es: ' . $x;

    //funcion para eliminar los slash, separando la cadena en subcadenas y volviendola a unir.
    function slash($datos){
    	$cadena = explode('\\', $datos);
    	$resultado = implode('',$cadena);
    	return $resultado;
    }

    //Funcion para eliminar espacios en blanco, slash y caracteres especiales
    // que se utlizan para pa inyeccion de sql
    function limpia_datos($datos){    	
    	$datos = trim($datos);
    	$datos = slash($datos);
    	$datos = htmlspecialchars($datos);
    	return $datos;
    }

    echo '<br>';
    $cadena= "It\'s amaizing! Who\'s to say this isn\'t a simple function?";
    echo limpia_datos($cadena);

    echo '<br>';
    $cadena2 = "ho\la \\ me llamo j\ua\\n \\";
    echo limpia_datos($cadena2);
    

?>