<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Aprendiendo el uso del print</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
<!--
    El print al igual que en python es php nos permite imprimir en pantalla un resultado, el print en php lo podemos remplazar 
    por el echo, a diferencia del echo que nos permite concatenar con caracteres especiales como los son los puntos  y las comas
    el print no nos permite usar las comas  para concatenar en un resultado.
-->
<body>
    <?php
    #Ejemplo con el echo; el echo nos permite concatenar con puntos y con comas
        $EjmEc = "Usaremos el echo para ";
        $EjmEc2 = "concatenar ";
        $EjmEc3 = " con los puntos y las comas.";

            Echo $EjmEc.$EjmEc2,$EjmEc3,"<br>";# Usamos puntos y comas a la vez.
            
    #Ejemplo con el print; el print solo nos permitira usar los puntos para poder concatenar
        $EjemEp = "Usaremos el print para";
        $EjemEp2 = " concatenar ";
        $EjemEp3 = "con el uso de los puntos";

            Print $EjemEp.$EjemEp2.$EjemEp3;# Al usar las comas en el print se nos muestra un error de sintaxis

    ?>    
</body>
</html>