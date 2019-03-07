<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<div style="margin: 0 auto; width: 200px">
    <div>
        <?php
        if (isset($_REQUEST["error"])) {
            print "<p style='color: red'>$_REQUEST[error] </p>";
        }
        ?>
    </div>
    <form action="p2.php" method="post">
        <p>
            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" id="usuario" value="<?php
                if (isset($_COOKIE["usuarioWeb"])) {
                    echo $_COOKIE["usuarioWeb"];
                }?>">
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" value="">
        </p>
        <p>
            <input type="submit" value="Entrar">
        </p>
    </form>
    </div>
</body>
</html>