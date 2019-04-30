<?php
header('Content-type: text/xml; charset="iso-8859-1"', true);
echo '<?xml version="1.0" encoding="iso-8859-1" ?>';

$conexion = mysqli_connect("localhost", "id9406790_adminies", "Adminies", "id9406790_bddrss")
    or die("Problemas en la conexión");

$registros =mysqli_query($conexion, "SELECT * FROM noticias ORDER BY fecha DESC")
    or die("Problemas en la consulta: ".mysqli_error($conexion));

echo '<rss version="2.0">';
echo '<channel>';
echo '<title>Noticias IES</title>';
echo '<link>https://webrssies.000webhostapp.com</link>';
echo '<language>es</language>';
echo '<description>Canal de noticias del IES</description>';
echo '<title>Canal de noticias del IES</title>';

while ($reg=mysqli_fetch_array($registros)) {
    echo '<item>';
        echo '<title>'.$reg[fecha].'</title>';
        echo '<link>'.'</link>';
        echo '<pubDate>'.$reg[fecha].'</pubDate>';
        echo '<category>'.$reg[categoria].'</category>';
        echo '<descryption>'.$reg[noticia].'</descryption>';
    echo '</item>';
}

echo '</channel>';
echo '</rss>';

mysqli_close($conexion);
?>