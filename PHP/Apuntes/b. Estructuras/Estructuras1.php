<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aleatorio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .rojo {
            color: red;
        }
        .verde {
            color: green;
        }
        .azul {
            color: blue;
        }
    </style>
</head>
<body>



<?php
    //Coge un numero aleatorio y dice si es menor que 5, 
    //mayor que 5 o si es 5

$aleatorio = rand(1,10);       //rand(numero minimo, numero maximo)
if ($aleatorio < 5) {
    echo "<p class='rojo'>El valor $aleatorio es menor que 5</p>";
} else if ($aleatorio > 5) {
    echo "<p class='azul'>El valor $aleatorio es mayor que 5</p>";
} else {
    echo "<p class='verde'>El valor es 5</p>";
}
?>

</body>
</html>

