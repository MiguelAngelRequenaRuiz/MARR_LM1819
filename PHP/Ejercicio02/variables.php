<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Variables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        echo "hola";
        echo "<b>Hola</b> a todos";
        print "<p>Hola</p>\n";

        $saludo = "holaaaa";
        echo "<b>$saludo</b>";
        echo "<br/>Mensaje: <b>" . $saludo . "</b>. Fin Mensaje <br/>"
    ?>
    
    <?= $saludo ?>

    <?php
        $a = 8;
        $b = 2;
        $c = 8;
        echo $a + $b, "<br/>";
        $resultado = $a - $b;
        echo "$resultado<br/>";
        $a++;
        $a = $a + 1;
        $a--;
        $a = $a - 1;

        echo $a != $b, "<br/>";
        echo $a < $b, "<br/>";
        echo ($a == $b) && ($c == $b), "<br/>";
        echo ($a == $b) || ($c == $b), "<br/>";

        echo !($b <= $c),"<br/>";

        $perimetro = 2 * 3.14 * 15;
        print $perimetro;
        print 2 * $perimetro;
        
        $tabla = ["valor1", "valor2"];

        echo $tabla[0];

        $tabla2 = [["msg1", "msg2"], ["msg3", "msg4"]];
        echo $tabla2[1][1];

        $correcto = true;
        if ($correcto == true) {
            print "<p>Es correcto<p/>";
        }
        $texto = "Este texto";
        $texto[0] = "e";
        echo $texto;

        $texto[15] = "F";
        echo $texto;

        $tabla3 = ["Hola", 2019];
        print $tabla3[0] . " - " . $tabla3[1];
        //añadir un valor a la tabla
        $tabla3 [] = "Fin";
        print $tabla3[2];

        //borrar un valor 
        //unset($tabla3[2]);
        print $tabla3[2];

        //unset(tabla3);
        print $tabla[0];

        echo count($tabla3);

        $numeros = [15, 10, 11, 15];
        echo max($numeros);
        echo min($numeros);

        sort($numeros);

        print_r($numeros);

        if (in_array(15, $numeros)) {
            print "Está el 15";

        }else{
            print "No está el 15";
        }

        array_search(15, $numeros);

        $encontrados = array_keys($numeros, 15);
        print_r($encontrados);

        shuffle($numeros);
        print_r($numeros);

        echo $numeros[array_rand($numeros)];

        define("PI", 3.14);
        print "<p>El valor de PI es " . PI . "<p/>";

        print "<pre>";
        print_r(get_defined_constants());
        print "<pre/>"; 

        $maximo = PHP_INT_MAX;
        echo $maximo;
    ?>

</body>
</html>