<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>funciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php
    
    function calculaHipotenusa($cateto1, $cateto2) {
        $hipo = sqrt($cateto1*$cateto1 + $cateto2*$cateto2);
        return $hipo;
    }

    function imprimir($mensaje) {
        print "$mensaje";
    };

    $mensaje = "heio";
    $cat1 = 12;
    $cat2 = 16;
    $hipotenusa = calculaHipotenusa($cat1, $cat2);
    print "<p>El triangulo tiene los catetos $cat1, $cat2 y la hipotenusa $hipotenusa</p>";


    imprimir($mensaje);

  ?>  
</body>
</html>