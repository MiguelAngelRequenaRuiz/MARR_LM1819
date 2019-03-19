<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sesiones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        //Inicio sesion
        session_start();
        
    
        $altura = trim(htmlspecialchars($_REQUEST["altura"], ENT_QUOTES, "UTF-8"));
        $peso = trim(htmlspecialchars($_REQUEST["peso"], ENT_QUOTES, "UTF-8"));

        $IMC = $peso / ($altura * $altura);
  
        if ($IMC < 18.5) {
            $IMCresul = "bajo peso";
        } else if ( $IMC > 18.5){
            $IMCresul = "peso normal";
        }else if ( $IMC > 25){
            $IMCresul = "sobrepeso";
        }else if ($IMC < 29.9){
            $IMCresul = "obesidad";
        }

        print "Hola " . $_SESSION['nombreWeb'] . " su IMC es de $IMC que corresponde a tener $IMCresul";
    ?>
</body>
</html>