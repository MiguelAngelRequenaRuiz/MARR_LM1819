<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>dfsd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    $email = trim(htmlspecialchars($_REQUEST["Email"], ENT_QUOTES, "UTF-8"));
    if (isset($_REQUEST['recordar_email'])) {
        setcookie("recordar_email", $email, time()+60*60*24*365);
    } else {
        setcookie("recordar_email", $email, time()-1000);
    }
    ?>
    <p>
        <a href="1_1.php">Volver</a>
    </p>
</body>
</html>
