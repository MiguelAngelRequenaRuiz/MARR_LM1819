<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
            <h2>Estación Meteorológica</h2>
            <form action="visualizacion.php" method="post">
                <div class="form-group">
                    <label for="fechades">Fecha desde: </label>
                    <input type="date" class="form-control" name="fecdes" id="fecdes" required>
                </div>
                <div class="form-group">
                    <label for="fechahas">Fecha hasta: </label>
                    <input type="date" class="form-control" name="fechahas" id="fechahas" required>
                </div>
                <div class="form-group">
                    <label for="medida">Tipo Medida: </label>
                    <select name="medida" class="form-control" >
		<?php
		$conexion = mysqli_connect("localhost", "root", "", "weather_station") 
or die("Problemas de conexion");

$registros = mysqli_query($conexion, "SELECT id, nombre FROM variables")
or die("Problemas en el select".mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {
echo "<option value='$reg[id]'>$reg[nombre]</option>";
}
	?>
      </select>
                </div>
                <div class="form-group">
                    <label for="valormed">Valor Medida: </label>
                    <input type="number" class="form-control" name="valormed" id="valormed" required>
                </div>
                <p>
                    <input type="submit" class="btn btn-primary btn-block" value="Buscar">
                </p>
            </form>

<?php
$conexion = mysqli_connect("localhost", "root", "", "weather_station") or die("Problemas con la conexión");
$registros = mysqli_query($conexion, "SELECT me.fecha_hora, va.nombre, me.valor, va.ud_med, se.modelo 
                                        FROM medidas as me INNER JOIN sensores as se on me.id_sensor = se.id
                                        INNER JOIN variables as va on me.id_variable = va.id")
    or die("Problemas en la consulta:".mysqli_error($conexion));
     
echo "<table class='table table-striped'>";
echo "<tr><th>Fecha</th><th>Tipo</th><th>Valor</th><th>Unidad</th><th>Sensor</th>";
while ($reg = mysqli_fetch_array($registros)) {
    echo "<tr>";
        echo "<td>" . $reg['me.fecha_hora'] . "</td>";
        echo "<td>" . $reg['va.nombre'] . "</td>";
        echo "<td>" . $reg['me.valor'] . "</td>";
        echo "<td>" . $reg['va.ud_med'] . "</td>";
        echo "<td>" . $reg['se.modelo'] . "</td>";
    echo "</tr>";
}
echo "</table>";
                
mysqli_close($conexion);
?>

</body>
</html>