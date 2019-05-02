<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guardar</title>
</head>
<body>
<?php
    $TipoHormiga = trim(htmlspecialchars($_REQUEST["TipoHormiga"], ENT_QUOTES, "UTF-8"));
    $Habitat = trim(htmlspecialchars($_REQUEST["Habitat"], ENT_QUOTES, "UTF-8"));
    $fecha = trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "UTF-8"));
    $Comportamiento = trim(htmlspecialchars($_REQUEST["Comportamiento"], ENT_QUOTES, "UTF-8"));

    $conexion = mysqli_connect("localhost", "id9406790_adminies", "Adminies", "id9406790_bddrss")
        or die("Problemas en la conexión");

    $registros =mysqli_query($conexion, "INSERT INTO noticias(TipoHormiga, Habitat, fecha, Comportamiento)
        VALUES('$TipoHormiga', '$Habitat', '$fecha', '$Comportamiento')")
        or die("Problemas en la consulta: ".mysqli_error($conexion));

    mysqli_close($conexion);
    
?>
</body>
</html>