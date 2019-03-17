<?php

strip_tags($_REQUEST["nombre"]  # C

$nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));
if ($nombre != "") {
    print "<p>Su nombre es $nombre</p>";
}


if (isset($_REQUEST["opcion"])) {       #Para los Radio y checkbox se pone isset para comprobar si esta marcado
    print "<p>Opción marcada</p>";
}


print "<p>Su nombre es $_REQUEST[nombre]</p>"; # $_REQUEST[nombre] Saca de todos los resultados 
                                               # el que tiene de nombre "nombre"


print_r($_REQUEST);     # print_r   impresion recursiva de la tabla
                        # $_REQUEST contiene todos los elementos del formulario
    
print_r($_FILES);       # $_FILES muestra mas informacion sobre los archivos
?>