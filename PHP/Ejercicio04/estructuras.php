<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estructuras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--Dados tres números indicar si alguno es suma de los otros dos y mostrarlo por pantalla-->
    <?php
    $num1 = rand(1,10);
    $num2 = rand(1,10);
    $num3 = rand(1,10);
    if ($num1 = $num2 + $num3 ){
        echo "$num1 es igual a $num2 + $num3";
    }
    else if ($num2 = $num1 + $num3 ){
        echo "$num2 es igual a $num1 + $num3";
    }
    else if ($num3 = $num1 + $num2 ){
        echo "$num3 es igual a $num1 + $num2";
    }
    else {
        echo "No son suma entre ellos";
    }
    ?>
</body>
</html>
<!-- 
    <?php
    for ($i=6; $i >= 0 ; $i = $i - 2) { 
       print "<p>$i</p>";
    }
    ?>

<?php
    for ($i=6; $i >= 0 ; $i--) { 
        if ($i % 2 == 0) {
           print "<p>$i</p>";
        }   
    }
    ?>

<?php
    $contador = 0;
    for ($i=6; $i >= 0 ; $i--) { 
        if ($i % 2 == 0) {
           print "<p>$i</p>";
        } else {
            $contador++;
        }   
    }
    echo "Hay $contador impares entre 6 y 0";
    ?>

CORREGIR CON VIDEO

<?php
    $filas = 3;
    $columnas = 4;
    echo "<table style='border solid 2px black'>";
    for ($i=0; $i <= $filas ; $i++) {
        echo "<tr>";
     for ($j=0; $j <= $columnas ; $i++) {
        echo "<td>$j</td>";
     }
     echo "</tr>";
    }
     echo "</table>";
    ?>

si funciona 

<?php
    define("PESETAS", "166.386");
    for ($i=1; $i <= 10 ; $i++) { 
        print "$i € = " . $i*PESETAS . "pts</br>";
     }
    ?>
NO
<?php
    $hora = date("H");
    if ($hora >= 7 && $hora >= 12) {
        echo "Buenos dias";
    }
    else if ($hora >= 13 && $hora >= 20) {
        echo "Buenas tardes";
    }
    else {
        echo "Buenas noches";
    }        
   
    ?>

SI
<?php
   $numeros = rand(1,100);
   $digitos = strlen($numeros);
   echo "$numeros tiene $digitos digitos";
    ?>
-->