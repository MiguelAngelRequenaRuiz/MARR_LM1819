<?php
header('Content-type: text/xml; charset="iso-8859-1"', true);
echo '<?xml version="1.0" encoding="iso-8859-1" ?>';

$conexion = mysqli_connect("localhost", "id9406790_adminies", "Adminies", "id9406790_bddrss")
    or die("Problemas en la conexión");

$registros =mysqli_query($conexion, "SELECT * FROM noticias_cientificas ORDER BY fecha DESC")
    or die("Problemas en la consulta: ".mysqli_error($conexion));

echo '<rss version="2.0.1">';
echo '<channel>';
echo '<title>Nuevos decubrimientos</title>';
echo '<link>https://webrssies.000webhostapp.com</link>';
echo '<language>es</language>';
echo '<description>Canal Cientifico</description>';


while ($reg=mysqli_fetch_array($registros)) {
    echo '<item>';
        echo '<title>'.$reg[Descubrimiento].'</title>';
        echo '<link>'.'</link>';
        echo '<pubDate>'.$reg[fecha].'</pubDate>';
        echo '<autor>'.$reg[Cientifico].'</autor>';
        echo '<description>'.$reg[texto].'</description>';
    echo '</item>';
}

echo '</channel>';
echo '</rss>';

mysqli_close($conexion);
?>