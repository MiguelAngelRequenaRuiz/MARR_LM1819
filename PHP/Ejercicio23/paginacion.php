<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paginacion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    if (isset($_REQUEST['posicion'])) {
       $inicio = $_REQUEST['posicion'];
    } else {
        $inicio = 0;
    }

    $conexion = mysqli_connect("localhost", "root", "", "cursophp")
    or die("Problemas en la conexión");

    $registros =mysqli_query($conexion, 
            "SELECT idAlumno, nombre, mail, codigocurso, nombreCurso 
            FROM alumnos a 
                INNER JOIN cursos c ON c.idCurso=a.codigocurso 
            LIMIT $inicio,2")
    or die("Problemas en la consulta: ".mysqli_error($conexion));

    $contador = 0;

    while ($reg = mysqli_fetch_array($registros)) {
        echo "Nombre: ". $reg['nombre']
        . " - Mail: ". $reg['mail']
        . " - Curso: ". $reg['codigocurso']. "<br>";
        $contador++;
    }

    if (($inicio == 0) ) {
       
    } else {
        $anterior = $inicio -2;
        echo "<a href='paginacion.php?posicion=$anterior'>Anteriores </a>";
    }

    if (($contador != 2) ) {
        
    } else {
        $siguiente = $inicio + 2;
        echo "<a href='paginacion.php?posicion=$siguiente'>Siguientes</a>";
    }

    mysqli_close($conexion);
    ?>
</body>
</html>