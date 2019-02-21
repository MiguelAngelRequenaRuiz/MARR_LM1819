<?php
$num = trim(htmlspecialchars(strip_tags($_REQUEST["num"]), ENT_QUOTES, "UTF-8"));
$min = intdiv($num, 60) ;
$seg = $num % 60 ;
if ($num < 60) {
    print "Son $num segundos";
} else if ($num = 60) {
    print "Es $min minuto";
} else if ($num = 0 ) {
    print "No hay segundos";
} else if ($num > 60) {
    print "Son $min minutos y $seg segundos";
}
?>