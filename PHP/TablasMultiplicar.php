<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tablas de Multiplicar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<?php
$fechaInicio=strtotime("1-m-y");
$fechaFin=strtotime("d-m-y");
for($i=$fechaInicio; $i<=$fechaFin; $i+=86400){
echo date("d-m-Y", $i)."<br>";
}
?>
</body>
</html>