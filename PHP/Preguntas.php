<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Preguntas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .rojo {
        color: red
    }
    .azul {
        color: blue
    }
    .verde{
        color: green
    }
    
    </style>
</head>
<body>
    <?php
      $numeros = rand(1,10);
      if ($numeros < 5) {
            echo "<p class='rojo'>El valor es menor que 5</p>";
      }
      else if ($numeros > 5) {
            echo "<p class='azul'>El valor es mayor que 5</p>";
      }
      else ($numeros = 5) {
            echo "<p class='verde'>El valor es 5</p>";
      }
    ?>
</body>
</html>
<!--echo $numeros[array_rand($numeros)];
      if ((array_rand($numeros))<5) {
        print "es menor que el 5";

    }else{
        print " es mayor que 5";
    }
    -->