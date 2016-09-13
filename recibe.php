<?php
    
    require_once('funciones.php');

    if(!$_POST){
        header('location: http://localhost/curso_php/formularios/');
    }

    print_r($_POST);
    echo '<br>';

    $nombre    = limpia_cadena($_POST['txtnombre']);
    $apellido1 = limpia_cadena($_POST['txtapellido1']); 
    $genero    = $_POST['rdgenero'];
    $estado    = $_POST['cmbestadocivil'];
    $terminos  = $_POST['chkterminos'];

    echo $nombre . ' ' . $apellido1. ' ' .$genero. ' ' .$estado .'<br>';
    echo $terminos;
?>