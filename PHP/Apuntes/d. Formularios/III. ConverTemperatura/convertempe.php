<?php
$tempe = trim(htmlspecialchars($_REQUEST["temperatura"], ENT_QUOTES, "UTF-8"));

$unidad = trim(htmlspecialchars($_REQUEST["opciones"], ENT_QUOTES, "UTF-8"));


//Si esta vacio
if (empty($tempe)) {
    print "<p>Temperatura Vacía</p>";

//Si no es un numero
} else if (!is_numeric($tempe)) {
    print "<p>Temperatura No Numérica</p>";

//Si $unidad = c y $temp menor que -273.15
} else if ($unidad == "c" && $tempe < -273.15) {
    print "<p>Temperatura Celsius Incorrecta</p>";

////Si $unidad = f y $temp menor que -459.67
} else if ($unidad == "f" && $tempe < -459.67) {
    print "<p>Temperatura Fahrenheit Incorrecta</p>";
} else {
    if ($unidad == "c") {
        $resFar = round(($tempe * 1.8) + 32, 2);    #round() Redondea
        print "<p>$tempe ºC son $resFar ºF</p>";
    } else {
        $resCel = round(($tempe - 32) / 1.8, 2);
        print "<p>$tempe ºF son $resCel ºC</p>";
    }
}
?>