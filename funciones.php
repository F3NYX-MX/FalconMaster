<?php

    //funcion para eliminar los slash, separando la cadena en subcadenas y volviendola a unir.
    function slash($datos){
    	$cadena = explode('\\', $datos);
    	$resultado = implode('',$cadena);
    	return $resultado;
    }

    //Funcion para eliminar espacios en blanco, slash y caracteres especiales
    // que se utlizan para pa inyeccion de sql
    function limpia_cadena($datos){    	
    	$datos = trim($datos);
    	$datos = slash($datos);
    	$datos = htmlspecialchars($datos);
    	return $datos;
    }
?>