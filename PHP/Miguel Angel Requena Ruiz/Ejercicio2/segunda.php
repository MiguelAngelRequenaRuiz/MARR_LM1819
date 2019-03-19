<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
    $nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));

    session_start();

    $_SESSION['nombreWeb'] = $nombre;   
    ?>
    
    <form action="tercera.php">
        <p>
            <label for="peso">Peso (KG): </label>
            <input type="text" name="peso" id="peso"/>
        </p>
        <p>
            <label for="altura">Altura (m):</label>
            <input type="text" name="altura" id="altura"/>
        </p>
        <p>
            <input type="submit" value="Calcular IMC"/>
        </p>
    </form>

</body>
</html>
