<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>
        <?php
            if(isset($_COOKIE['nombre'])) {
                print "Hola " . $_COOKIE['nombreUsu'];
            } else {
                print "Hola anonimo";
            }
        ?>
        <a href="segunda.php"> Ir a Segunda</a>
    </p>
</body>
</html>