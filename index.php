<!DOCTYPE html>
<html lang="en">

<head>
    <title>Empezando con Formularios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Solicitante</h1>
    <form name="formulario" id="formulario" action="recibe.php" method="POST">
        
        <label for="txtnombre">Nombre</label>
        <input type="text" name="txtnombre" value="" id="txtnombre" placeholder="Ej. Juan">
        </br>
        <label for="txtapellido1">Primer Apellido</label>
        <input type="text" name="txtapellido1" value="" id="txtapellido1" placeholder="Ej. Perez">
        <br>
        <!--los input de tipo radio llevan el mismo 'name' para relacionarse -->
        <label for="rdmasculino">Masculino</label>
        <input type="radio" name="rdgenero" value="Masculino" id="rdmasculino">
        <label for="rdfemenino">Femenino</label>
        <input type="radio" name="rdgenero" value="Femenino" id="rdfemenino">
        <br>
        <!--Combobox estatico -->
        <select name="cmbestadocivil" id="cmdestadocivil">
                <option value="1">Soltero</option>
                <option value="2">Casado </option>
                <option value="3">Viudo  </option>
                <option value="4">Divorciado</option>
        </select>
        <br>
        <label for="chkterminos">Aceptar los terminos</label>
        <input type="checkbox" name="chkterminos" value="true" id="chkterminos">
        <br>
        <input type="submit" value="Enviar">
        <br>                
    </form>
</body>

</html>