<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "cursophp")
            or die("Problemas con la conexión");

            $email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8")); 
            
            $registros = mysqli_query($conexion, 
            "SELECT alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso 
            from alumnos AS alu INNER JOIN cursos AS cur ON alu.codigocurso = cur.idCurso where alu.mail like '$email'") or die("Problemas en la consulta:".mysqli_error($conexion));
           
           
           if ($reg = mysqli_fetch_array($registros)) {
                echo "<table class='table table-striped'>";
                echo "<tr>  <th>Código</th>   <th>Nombre</th>     <th>Email</th>      <th>Curso</th>  </tr>";
                echo "<tr>";
                echo "<td>" .$reg['idAlumno'] . "</td>";
                echo "<td>" .$reg['nombre'] . "</td>";
                echo "<td>" .$reg['mail'] . "</td>";
                echo "<td>" .$reg['nombreCurso'] . "</td>";
                echo "</tr>";
                echo "</table>";
            } else echo "Error en la validación: El correo no existe";
            mysqli_close($conexion);
            

        ?>
    <form action="res.php" method="post">
        
                <p>
                <label for="num">Email: </label>
                <input type="email" name="email" id="email">
                </p>
                
                <p>
                    <input type="submit" value="Validar">
                </p>
            </form>
    </body>

</html>