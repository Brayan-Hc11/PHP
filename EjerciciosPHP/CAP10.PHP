<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Las constantes </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
<!--
     Las constantes en php,  las constantes en php son contenedores como las variables pero la diferencia fundamental es que las constantes 
    almacenan un valor que no va poder ser cambiado durante la ejecución del Scring, las constantes las definiremos una vez y mientrás se 
    este ejucutando dicho código no van a poder ser modificadas, para las constantes usaremos la palabra reservada define() es una función 
    del lenguaje de php.  require de dos argumentos obligatorios y un tercer argunto opcional.
    
        1.El primer parametro de la constante es el nombre que le daremos a la constante, el nombre debe estar estar escrito en 
        mayusculas
        
        2:En el segundo parametro debemos de escribir el dato que queremos que se muestre en le código de ejecución puede ser un scring 
        o un número (para escribirlos debemos de tener en cuenta condiciones de cada uno de ellos como las comillas)
    
        Ejemplo:
    
    Define ("PI" ,3.141593);
        Echo PI;

-->

    <body>
        <?php
        #Primera constante
    define ("PI" ,3.141593);#Con var_dump() Podemos ver el contenido que se haya en la constante
        Echo PI;

        ?>
    </body>
</html>