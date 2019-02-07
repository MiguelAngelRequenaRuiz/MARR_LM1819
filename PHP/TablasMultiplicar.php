<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tablas de Multiplicar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <?php
    $a=0;
    $b=0;
    while ($a <= 10); do{
        $a=$a + 1 ;
        $b=$b + 1 ;
        $r=$b * $a ;
        echo "$b x $a = $r";
    }
    T_while;
    ?>
</body>
</html>