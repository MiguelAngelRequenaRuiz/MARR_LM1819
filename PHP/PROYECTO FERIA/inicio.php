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
            <h2>Estacion Meteorológica</h2>
            <form action="consulta.php" method="post">

                <div class="form-group">
                    <label for="fecha_ini">Fecha desde</label>
                    <input type="date" class="form-control" name="fecha_ini" id="fecha_ini">
                </div>

                <div class="form-group">
                        <label for="fecha_fin">Fecha hasta</label>
                        <input type="date" class="form-control" name="fecha_fin" id="fecha_fin">
                </div>

                <div class="form-group">
                        <label for="medida">Tipo de medida</label>
                        <select name="medida" class="form-control" >
                            <?php
                            $conexion = mysqli_connect("localhost", "root", "", "estacion") 
                                or die("Problemas de conexión");
                            $registros = mysqli_query($conexion, "SELECT Codigo, Tipo FROM variable_meteorologica")
                                or die("Problemas en el select".mysqli_error($conexion));
                            while ($reg = mysqli_fetch_array($registros)) {
                                echo "<option value='$reg[Codigo]'>$reg[Tipo]</option>";
                            }
                            ?>
                        </select>
                    </div>

                <div class="form-group">
                    <label for="valor">Valor medido</label>
                    <input type="number" class="form-control" name="valor" id="valor">
                </div>

                <p>
                    <input type="submit" class="btn btn-primary btn-block" value="Buscar">
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
            p
</body>
</html>