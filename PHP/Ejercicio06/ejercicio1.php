<?php
$email = trim(htmlspecialchars(strip_tags($_REQUEST["email"]), ENT_QUOTES, "UTF-8")); 
$reemail = trim(htmlspecialchars(strip_tags($_REQUEST["reemail"]), ENT_QUOTES, "UTF-8"));
$noticias = trim(htmlspecialchars(strip_tags($_REQUEST["noticias"]), ENT_QUOTES, "UTF-8"));
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email";
} else if (!filter_var(reemail, FILTER_VALIDATE_EMAIL)){
    print "Error en el email de confirmacion";
} else if ($email != $reemail) {
    print "Debe coincidir el email de confirmación";
} else if ($noticias == nada){
    print "Debe indicar si desea o no recibir noticias";
}}else {
    if ($noticias == 0){
        print "Su correo va a recibir noticias";
    } else {
        print "Su correo $email va a recibir noticias";
    }
}
?>