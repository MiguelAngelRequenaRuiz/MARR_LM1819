<?php
    if (isset($_REQUEST['color'])) {
        setcookie("color", $_REQUEST['color'], time()+60*60*24*365);
    }
    //Redireccion a formu.php
    header('Location: formu.php');
?>