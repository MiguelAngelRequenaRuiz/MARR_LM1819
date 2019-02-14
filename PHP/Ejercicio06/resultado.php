<?php
if ($_REQUEST["nombre"] != "" ){
print "<p>Su nombre es $_REQUEST[nombre]</p>";
}

if (isset($_REQUEST["opcion"])){
    print "opcion marcada";
}

//print_r recorre toda la tabla
//$_REQUEST sirve para acceder a los datos de un formulario
//$_FILES sirve para acceder a los archivos de un formulario
//print_r($_REQUEST);
//print_r($_FILES);
?>