<?php
//saca la extension de de un archivo y ponlo en mayusculas

function calcularExtension($fichero){
    // explode: el primer parametro es el demilitador y el segundo es a 
    //lo que se lo vamos a aplicar. Si el delimitador dentro de una palabra ,
    //se hace $loquesea[0] para llamar a lo de la izquierda y para los siguiente es 
    // $loquesea[n]
   $nombreExt = explode(".", $fichero);
   return strtoupper($nombreExt[1]); 
   //strtoupper es para poner en mayusculas
   //strtolower es para poner en minuscula
}

$nombreFichero = "fichero.txt";
$ext = calcularExtension($nombreFichero);
print "<p>La extension del archivo $nombreFichero es $ext";
?>