<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inicio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2>Lista de proveedores</h2>
            <form action="insertado.php" method="post">
        
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "bdejemplo")
            or die("Problemas con la conexión");
            
            $registros = mysqli_query($conexion, 
            "SELECT idProveedor, nombre from proveedores ") or die("Problemas en la consulta:".mysqli_error($conexion));
           
           
           while ($reg = mysqli_fetch_array($registros)) {
                echo "<table class='table table-striped'>";
                echo "<tr> <th>IdProveedor</th> <th>Nombre</th> </tr>";
                echo "<tr>";
                echo "<td>" .$reg['idProveedor'] . "</td>";
                echo "<td>" .$reg['nombre'] . "</td>";
                echo "</tr>";
                echo "</table>";
            } 
            mysqli_close($conexion);
        ?>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" id="cantidad" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" name="precio" id="precio" required>
                </div>
                    <label for="proveedor">Proveedor</label>
                    <select name="proveedor" class="form-control" >
                        <?php
                        $conexion = mysqli_connect("localhost", "root", "", "bdejemplo")
                        or die("Problemas de conexión");

                        $registros2 = mysqli_query($conexion, "SELECT idProveedor, nombre from proveedores ")
                            or die("Problemas en el select".mysqli_error($conexion));

                        while ($reg = mysqli_fetch_array($registros2)) {
                            echo "<option value='$reg[idProveedor]'>$reg[nombre]</option>";
                        }
                        ?>
                    </select>
                <p>
                    <br/>
                    <input type="submit" class="btn btn-primary btn-block" value="Insertar">
                </p>
            </form>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
</html>