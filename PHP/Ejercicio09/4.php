<!--
        Escriba un formulario que indique que tabla de multiplicar queremos mostrar. 
        El número debe ser entero positivo entre 1 y 100.
    -->
<?php
$num = trim(htmlspecialchars($_REQUEST["num"], ENT_QUOTES, "UTF-8"));

if (!is_numeric($num) || $num > 1 && $num < 100) {
    print "<p>Error. El número introducido debe estar entre el 1 y el 100"
} else {
    for ($i=1; $i < 10 ; $i++) { 
        $res = $i * $num
        print "$i * $num = $res"
    }
}
?>