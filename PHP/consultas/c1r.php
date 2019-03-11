<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>consulta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "cursophp")
            or die("Problemas con la conexión");

            $registros = mysqli_query($conexion, 
            "SELECT alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso 
            from alumnos AS alu INNER JOIN cursos AS cur ON alu.codigocurso = cur.idCurso ") or die("Problemas en la consulta:".mysqli_error($conexion));
            
            echo "<table class='table table-striped'>";
            echo "<tr>  <th>Código</th>   <th>Nombre</th>     <th>Email</th>      <th>Curso</th>  </tr>";
            while ($reg = mysqli_fetch_array($registros)) {
                echo "<tr>";
                echo "<td>" .$reg['idAlumno'] . "</td>";
                echo "<td>" .$reg['nombre'] . "</td>";
                echo "<td>" .$reg['mail'] . "</td>";
                echo "<td>" .$reg['nombreCurso'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($conexion);
        ?>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
</body>
</html>