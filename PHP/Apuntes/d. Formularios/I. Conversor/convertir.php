<?php
$pies = trim(htmlspecialchars($_REQUEST["pies"], ENT_QUOTES, "UTF-8"));

$pulgadas = trim(htmlspecialchars($_REQUEST["pulgadas"], ENT_QUOTES, "UTF-8"));

$piesok = false;

$pulgadasok = false;

define('UNAPULGADA', 2.54);

//Si el campo esta vacio
if (empty($pies)) {
    print "<p>Campo Pies vacío</p>";

//Si no es un entero
} else if (!filter_var($pies, FILTER_VALIDATE_INT)) {
    print "<p>Campo Pies No es un Número Entero</p>";

//Si es menor que 0 (negativo)
} else if ($pies < 0) {
    print "<p>Campo Pies debe ser >= 0</p>";

//Si no se cumple lo anterior 
} else {
    $piesok = true;
}

//Lo mismo para la otra variable

if (empty($pulgadas)) {
    print "<p>Campo Pulgadas vacío</p>";
} else if (!filter_var($pulgadas, FILTER_VALIDATE_FLOAT)) {
    print "<p>Campo Pulgadas No es un Número Decimal</p>";
} else if ($pulgadas < 0) {
    print "<p>Campo Pulgadas debe ser >= 0</p>";
} else {
    $pulgadasok = true;
}

//Si se cumplen las dos condiciones entonces 
if ($piesok && $pulgadasok) {
    $cm = ($pies * 12 + $pulgadas) * UNAPULGADA;
    print "<p>$pies pies y $pulgadas pulgadas son $cm centímetros</p>";
}
?>