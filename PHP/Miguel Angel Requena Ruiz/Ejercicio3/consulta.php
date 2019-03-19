<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
        $conexion = mysqli_connect("localhost", "root", "", "bdpersonas") 
        or die("Problemas de conexión");
        
        $registros = mysqli_query($conexion, "SELECT id, nombre, pais FROM personas WHERE lower(pais)='$_REQUEST[pais]'") 
        or die("Problemas en la consulta: ".mysqli_error($conexion));              

                while ($reg=mysqli_fetch_array($registros)) {   
                    echo "Id: " . $reg['id'] . "<br/>";
                    echo "Nombre: " . $reg['nombre'] . "<br/>";
                    echo "Pais: " . $reg['pais'] . "<br/>";
                }
        mysqli_close($conexion);


            

    ?>
</body>
</html>