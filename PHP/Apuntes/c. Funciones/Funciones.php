<?php
            //Funcion para calcular hipotenusa
        function calculaHipotenusa($par1, $par2) {
            return sqrt($par1*$par1 + $par2*$par2);
        }
        //Llamar a la funcion de la hipotenusa
        $cat1 = 12;
        $cat2 = 16;
        $hipotenusa = calculaHipotenusa($cat1, $cat2);
        print "<p>El triángulo de lados $cat1, $cat2 y hipotenusa $hipotenusa</p>";
            
        
            //Funcion para imprimir
        function imprimir($mensaje) {
            print "<p>$mensaje</p>";
        }

        //Llamar a la funcion de imprimir
        imprimir("Hola que tal");
?>

<?php
    //crea la cabecera html
function cabecera($titulo) {
    print "<!DOCTYPE html>";
    print "<html>";
    print "<head>";
    print "<meta charset='utf-8' />";
    print "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
    print "<title>$titulo</title>";
    print "<meta name='viewport' content='width=device-width, initial-scale=1'>";
    print "</head>";
    print "<body>";
    print "<h1>$titulo</h1>";
}

    //crea el pie html
function pie() {
    print "</body>";
    print "</html>";
}
?>

<?php
//Llamada a la funcion de cabecera y pie

        /* include o require "biblioteca.php"; */
    require("biblioteca.php");
    cabecera("Mi Página");
    pie();
?>

<?php
    //calcular extension de un fichero y ponerlo en mayusculas
function calcularExtension($fichero) {
    /* $nombreExt = explode(".", $fichero); */      #explode("Delimitador", $nombre)
    /* return strtoupper($nombreExt[1]); */         #poner en mayusculas strtoupper($LoQueSea)
    $inicio = strrpos($fichero, ".") + 1;
    return strtoupper(substr($fichero, $inicio));
}
$nombreFichero = "fichero.exe.txt";
$ext = calcularExtension($nombreFichero);
print "<p>La extensión del archivo $nombreFichero es $ext</p>";
?>
