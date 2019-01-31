<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Preguntas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
      $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
      echo $numeros[array_rand($numeros)];
      if ((array_rand($numeros))<5) {
        print "es menor que el 5";

    }else{
        print " es mayor que 5";
    }
    ?>
</body>
</html>