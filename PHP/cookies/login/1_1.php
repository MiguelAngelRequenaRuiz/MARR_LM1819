<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="1.php" method="post">
        <p>
        <label for="Email">Email: </label>
        <input type="email" name="Email" id="Email" 
        value="
        <?php
            if (isset($_COOKIE['recordar_email'])) {
                echo $_COOKIE['recordar_email'];
            }
        ?>
        ">
        </p>

        <p>
            <label for="pass">Contraseña: </label>
            <input type="password" name="pass" id="pass">
        </p>
        <p>
            <label for="opcion">Desea recordar el email? </label>
            <input type="checkbox" name="opcion" id="opcion" value="1">
        </p>
        <p>
            <input type="submit" value="Entrar">
        </p>

        <a href="1.php">Ir a resultado</a>
    </form>
</body>
</html>