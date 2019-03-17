<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estructuras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
    //contar del 6 al 0         for ($i=6; $i >= 0; $i--) {print "<p>$i</p>"}

    //contar numeros pares entre el 6 y el 0

$contador = 0;
for ($i=6; $i >= 0; $i--) {         #for ( $i = numero inicial; condicion hasta donde parar !!!!NUNCA PONER EL = SOLO!!!! ; Incremento o decremento )
    if ($i % 2 == 0) {              #si el modulo de $i es 0 el numero es par
        print "<p>$i</p>";
    } else {                        #si no es par entonces +1 al contador
        $contador++;
    }
}
echo "Hay $contador impares entre 6 y 0";



    //Crear una tabla html de 3 filas y 4 columnas
$filas = 3;
$columnas = 4;
echo "<table style='border: 2px solid black'>";         #table fuera del for
for ($i=0; $i < $filas; $i++) { 
    echo "<tr>";
    for ($j=0; $j < $columnas; $j++) { 
        echo "<td style='border: 2px solid black'>$j</td>";
    }
    echo "</tr>";
}


    //imprime la equivalencia de 1 a 10 euros en pesetas
echo "</table>";
define("PESETAS", 166.386);
for ($i=1; $i <= 10 ; $i++) { 
    print ("$i € = " . $i*PESETAS . " pts<br/>");
}
echo "<br/>";


    //Segun la hora te dice la etapa del dia
$hora = date("H");                                      #extraer las horas con el date
if ($hora >= 8 && $hora <= 12) {
    echo "Buenos días";
} else if ($hora > 12 && $hora <= 20) {
    echo "Buenas tardes";
} else {
    echo "Buenas noches";
}
echo "<br/>"; 


    //Genera un numero aleatorio entre 1 y 100 y di cuantos digitos tiene
$numero = rand(1, 100);
$digitos = strlen($numero);                             #strlen($numero) te devuelve el numero de caracteres de una cadena
echo "$numero tiene $digitos digitos";

//Genera un numero aleatorio entre 1 y 100 y di cuantos digitos tiene
if ($numero < 10) {
    $digitos = 1;
} else if ($numero < 100) {
    $digitos = 2;
} else {
    $digitos = 3;
}
echo "$numero tiene $digitos digitos";
?>

</body>
</html>