<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los saltos de linea</title>
</head>
<!--
    Los saltos en linea en php se pueden representar con una etiqueta de HTMl como <br> que nos funciona para hacer el salto de 
    linea entre las lineas, se escribe dentro del código php o también lo podemos usar en el echo para poder visualizar los 
    saltos de linea

    probaremos dos metodos para usar el salto de linea en php:
        metodo1:Usaremos la etiqueta de br directamente en el código de php, posicionamos la etiqueta en el interior del string
        
        Ejemplo:

    $salto1M1 ="Este es un fragmento de código en php con salto de linea. <br>";
    $salto2M1 ="esta es otra linea para ver el salto de la etiqueta br ";

       echo $salto1M1,$salto2M1;

       Metodo2: Usaremos la etiqueta de salto de linea (<br>) concetenada en el echo mediante un string 

       Ejemplo:
    
    $salto1M2 ="Este es un nuevo fragmento de código de php, en donde usaremos el salto de linea en el echo";
    $salto2M2 ="esta es otra linea para ver el salto de linea";

        Echo $salto1M2."<br>".$salto2M2;
        
-->

<body>
    <?php
    # Ejemplo del metodo 1

    $salto1M1 ="Este es un fragmento de código en php con salto de linea directamente en el código. <br>";
        #usamos la etiqueta de br directamente en la variable posicionandola dentro del string
    $salto2M1 ="esta es otra linea para ver el salto de la etiqueta br <br> ";

        echo $salto1M1,$salto2M1;

    # Ejemplo del metodo 2

    $salto1M2 ="Este es un nuevo fragmento de código de php, en donde usaremos el salto de linea en el echo";
        #Usamos la etiqueta del br en el echo usando la concatenación 
    $salto2M2 ="esta es otra linea para ver el salto de linea";

        Echo $salto1M2."<br>".$salto2M2; #Concatenamos le etiqueta en un string

    ?>
</body>
</html>