<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Apuntes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    AVG  #Calcula la media

    strlen($numero) #te devuelve el numero de caracteres de una cadena

    rand(numero minimo, numero maximo)  #Genera un numero aleatorio entre el min y el max dado

    %   #Calcula el modulo(si su division da 0 o no)
    
    $a++ #Suma 1 a $a
    
    $a-- #Resta 1 a $a

    $a = $b #Iguala

    $a != $b #Distinto

    $a == $b #Compara
    
    $a < $b #menor que

    $a > $b #mayor que

    $a <= $b #menor o igual

    $a >= $b #mayor o igual

    ($a < $b) && ($a > $b) # Y

    ($a < $b) || ($a > $b) # O

    #Si se cunmple la condicion aparece en pantalla un 1

    !($a < $b) #Si se cumple la condicion no se muestra en pantalla

    $a = 2 * 5 * 3 #Se hace el calculo (+, -, /, *)

    $tabla = [["p1", "p2"]["p3", "p4"]]; #Crea una tabla 2x2
    echo $tabla[1][1]; #Muestra p4, se cuenta el hueco 1 como la posicion 0

    $correcto = true;   
    if ($correcto){     #Se mostraria hola
        print "hola";       #Si pusieramos (!$correcto) no nos aparecería el mensaje 
    }   

    $texto = "Este texto"
    $texto[0]= "e"    #mostraria "este texto"

    $tabla3 = ["Hola", 2019];
    print $tabla3[0] . " - " . $tabla3[1]; #concatena "hola" con "-" con "2019"


    // Añadir un valor a la tabla
    $tabla3[] = "Fin";
    print $tabla3[2];

    // Borrar un valor 
    unset($tabla3);  #borra la tabla



    echo count($tabla3);   #cuenta el numero de caracteres

    $numeros = [15, 10, 5, 15, 11, 15];
    echo min($numeros);     #coje el numero menor
    echo max($numeros);     #coje el numero mayor

    print_r($numeros);      #enumera de 0 a n cosas de una variable

    if (in_array(15, $numeros)) {  
        print "Está el 15";         #comprueba la existencia
    } else {                     #in_array(Cosa a buscar, donde buscar)
        print "No está";
    }

    echo array_search(15, $numeros);    #da la primera posicion en la que 
                                        #se encuentra lo que buscamos


    $encontrados = array_keys($numeros, 15); #da las posiciones en la que 
    print_r($encontrados);                   #se encuentra lo que buscamos


    shuffle($numeros);  #cambia el orden de las posiciones de la lista
    print_r($numeros);


    echo $numeros[array_rand($numeros)]; #imprime un numero aleatorio


    define("PI", 3.14);     #define una constante
    print "<p>El valor de PI es " . PI . "</p>";
    
    
    print "<pre>";
    print_r(get_defined_constants());   #muestra las constantes existentes
    print "</pre>";

    $maximo = PHP_INT_MAX;  #muestra el numero entero mas grande soportado
    echo $maximo;           
    ?>
</body>
</html>