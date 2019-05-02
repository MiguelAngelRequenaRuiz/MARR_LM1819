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
    $Cientifico = trim(htmlspecialchars($_REQUEST["Cientifico"], ENT_QUOTES, "UTF-8"));
    $Descubrimiento = trim(htmlspecialchars($_REQUEST["Descubrimiento"], ENT_QUOTES, "UTF-8"));
    $Area = trim(htmlspecialchars($_REQUEST["Area"], ENT_QUOTES, "UTF-8"));
    $fecha = trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "UTF-8"));
    $texto = trim(htmlspecialchars($_REQUEST["texto"], ENT_QUOTES, "UTF-8"));

    $conexion = mysqli_connect("localhost", "id9406790_adminies", "Adminies", "id9406790_bddrss")
        or die("Problemas en la conexión");

    $registros =mysqli_query($conexion, "INSERT INTO noticias(Cientifico, Descubrimiento, Area, fecha, noticia)
        VALUES('$Cientifico', '$Descubrimiento', '$Area', '$fecha', '$texto')")
        or die("Problemas en la consulta: ".mysqli_error($conexion));

    mysqli_close($conexion);
    
?>
</body>
</html>