<?php
$edad = $_REQUEST["edad"];
$email = $_REQUEST["email"];
if (is_numeric($edad)) {            #comprueba que es un numero
    print "Su edad es $edad";
} else {
    print "Error al introducir la edad";
}


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {    #filter_var(cadena, tipo_validacion)    
    print "Email correcto";                         #Tipos de validacion: FILTER_VALIDATE_URL, FILTER_VALIDATE_INT (enteros), FILTER_VALIDATE_FLOAT (numero decimal)
} else {
    print "Email incorrecto";
}
?>