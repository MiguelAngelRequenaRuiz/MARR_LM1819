<?php
$base = trim(htmlspecialchars($_REQUEST["base"], ENT_QUOTES, "UTF-8"));

$altura = trim(htmlspecialchars($_REQUEST["altura"], ENT_QUOTES, "UTF-8"));

$baseok = false;

$alturaok = false;

print "<h1>Calculos</h1>";

if (empty($base)) {
    print "<p>Campo base vacío</p>";
} else if (!filter_var($base, FILTER_VALIDATE_INT)) {
    print "<p>Campo base no es un Número </p>";
} else if ($base < 0) {
    print "<p>Campo base debe ser >= 0</p>";
} else {
    $baseok = true;
}

//Lo mismo para la otra variable

if (empty($altura)) {
    print "<p>Campo altura vacío</p>";
} else if (!filter_var($altura, FILTER_VALIDATE_INT)) {
    print "<p>Campo altura no es un Número Entero</p>";
} else if ($altura < 0) {
    print "<p>Campo altura debe ser >= 0</p>";
} else {
    $alturaok = true;
}

//Si se cumplen las dos condiciones entonces 

if ($baseok && $alturaok && isset($_REQUEST["perim"])) {     
    $perim = ($base * 2 + $altura * 2);
    print "<p>El perimetro es de $perim centimetros</p>";
    
} 
if ($baseok && $alturaok && isset($_REQUEST["area"])) {
    $area = ($base * $altura);
    print "<p>El area es de $area centimetros cuadrados</p>";
}
?>
