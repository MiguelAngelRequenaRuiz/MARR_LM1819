<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Almacenar Cookie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    $email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));

    //Si esta marcado el checkbox recordar
    if (isset($_REQUEST['recordar'])) {
        setcookie("mailUsu", $email, time()+60*60*24*365);
        //setcokie("NomCookie", valor, tiempo de expiracion)
    } else {
        setcookie("mailUsu", $email, time()-1000);
        //Borrar la cookie poniendo tiempo negativo
    }
    ?>
    <p>
        <a href="login.php">Volver</a>
    </p>
</body>
</html>