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
            <h2>Productos</h2>
            <?php
            $conexion = mysqli_connect("localhost", "root", "", "bdejemplo")
            or die("Problemas con la conexión");
            
            $registros = mysqli_query($conexion, 
            "SELECT prod.descripcion, prod.cantidad, prod.precio, prod.idProveedor, prov.nombre
            from productos AS prod INNER JOIN proveedores AS prov ON prod.idProveedor = prov.idProveedor ") or die("Problemas en la consulta:".mysqli_error($conexion));
           
           echo "<table class='table table-striped'>";
           echo "<tr>    <th>Producto</th>    <th>Precio</th> <th>Proveedor</th> </tr>";
           while ($reg = mysqli_fetch_array($registros)) {

                echo "<tr>";
                echo "<td>" .$reg['descripcion'] . "</td>";
                echo "<td>" .$reg['precio'] . "</td>";
                echo "<td>" .$reg['nombre'] . "</td>";
                echo "</tr>";
            } 
            echo "</table>";
            
           $registros2 = mysqli_query($conexion, 
           "SELECT sum(cantidad) as Total, precio, cantidad
           from productos") or die("Problemas en la consulta:".mysqli_error($conexion));
          
          
          while ($reg = mysqli_fetch_array($registros2)) {
               echo "<table class='table table-striped'>";
               echo "<tr>    <th>Total de productos</th>    <th>Precio total</th> </tr>";
               echo "<tr>";
               echo "<td>" .$reg['cantidad'] . "</td>";
               echo "<td>" .$reg['precio'] * $reg['cantidad']. "</td>";
               echo "</tr>";
               echo "</table>";
           } 

            mysqli_close($conexion);



        ?>
            <form action="insertar.php" method="post">
                <p>
                    <input type="submit" class="btn btn-primary btn-block" value="Insertar nuevo producto">
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