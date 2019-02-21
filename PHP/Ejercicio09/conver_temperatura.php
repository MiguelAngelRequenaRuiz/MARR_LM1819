<?php

$temp = trim(htmlspecialchars($_REQUEST["temp"], ENT_QUOTES, "UTF-8"));
$unidad = trim(htmlspecialchars($_REQUEST["unidad"], ENT_QUOTES, "UTF-8"));

if (empty ($temp)){
    print "<p>Temperatura vacía</p>";
} else if (!is_numeric($temp)) {
    print "<p>Temperatura no numerica</p>";
} else if ($unidad == "c" && $temp < -273.15) {
    print "<p>Temperatura celsius incorrecta</p>";
} else if ($unidad == "f" && $temp < 459.67) {
    print "<p>Temperatura Fahrenheit incorrecta</p>";
} else {
    if ($unidad == "c") {
        $resFar = round(($temp * 1.8) + 32,2);
        print "<p>temp ºC son $resFar ºF</p>";
    } else {
        $resCel = round(($temp - 32 )/1.8, 2);
        print "<p>temp ºF son $resCel ºC</p>";
    }
}
?>