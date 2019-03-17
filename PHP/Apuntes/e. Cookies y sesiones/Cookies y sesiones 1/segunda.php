<?php
$nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));

//Iniciar sesion
session_start();

//Doy a la sesion nombreweb el nombre $nombre
$_SESSION['nombreWeb'] = $nombre;   #$_SESSION contiene todas las sesiones

//Borra la sesion
//unset($_SESSION['nombreWeb']);

//Redirección a tercera.php
header('Location: tercera.php')
?>