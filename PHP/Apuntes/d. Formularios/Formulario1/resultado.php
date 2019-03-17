<?php

strip_tags($_REQUEST["nombre"]  # strip_tags() sirve para que no funcione el html
                                # por ejemplo que si pones <b></b> no aparezca en negrita

trim()      #quita los espacio que haya por delante y por detras

htmlspecialchars(cadena, ENT_QUOTES, "utf-8")     #Convierte las comillas dobles en simples 


//Para trabajar mejor hacer una variable
$nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));
//Con esta cadena quitamos los espacios por delante y por detras, los caracteres especiales y las etiquetas html

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