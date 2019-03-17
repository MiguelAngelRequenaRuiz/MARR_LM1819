<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="resultado.php" enctype="multipart/form-data" method="POST">

        <p><label>Nombre: </label><input type="text" name="nombre"></p>
        <p><label>Pass: </label><input type="password" name="clave"></p>
        <p><label>Descripción: </label><textarea rows="5" cols="5" name="descrip">
            Esta es la descripción</textarea></p>
        <p><input type="checkbox" name="opcion" value="123">Opción</p>      <!-- Si no ponemos value, cuando esta activo pone on y cuando no esta activo no pone nada
                                                                                 Si le ponemos un value aparecera lo que pongamos en el value       -->
        <p>
            <input type="radio" name="datos" value="66" checked>Dato1       <!-- cuando no esta activo no pone nada  cosa que podemos arreglar      -->
            <input type="radio" name="datos" value="77">Dato2               <!--  poniendole a alguna de las opciones un checked-->
        </p>
        <p>
            <select name="seleccion[]" multiple="multiple">                 <!-- Si seleccionamos dos opciones, para que aparezcan las dos opciones enumeradas  -->
                <option value="1">Uno</option>                              <!-- tenemos que poner los corchetes en el campo name-->
                <option value="2">Dos</option>
            </select>
        </p>
        <p><label>Fichero: </label><input type="file" name="fichero"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
</body>
</html>