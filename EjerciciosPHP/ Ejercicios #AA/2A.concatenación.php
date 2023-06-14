<!DOCTYPE html>
<html>
    <body>
        <!--
    Estaremos aprendiendo el uso de la concatenación en el lenguaje de php. Para poder usar la concatención en php
    estableceremos unas cuantas variables de strigs o de tipo texto.

        Ejemplo:

    1.$TextoUno ="Estamos ";
    2.$TextoDos ="aprendiendo el uso ";
    3.$TextoTres ="de la concatenación en PHP.";
    
    Usaremos estas tres variables como ejemplo de la concatencación, ahora imprimiremos el resulatado de las variables
    concatenadas para hacer esto usaremos un echo y con ayuda de los puntos gramaticales que en php se usan para 
    concatenar.

        Ejemplo:

   echo $TextoUno.$TextoDos.$TextoTres;

   como resulatado tendremos el contenido delas variables impimidos en una sola linea 
   en la pantalla de núestro navegador.

        Ejemplo:

    Estamos aprendiendo el uso de la concatenación en PHP.

    Nota:
        .El comando echo nos permite usar los puntos gramaticales para la concatenación pero también nos permite 
            el uso de las comas para poder concatenar (solo aplicar en el echo).

        .Las varibles de tipo strig también nos permite concatenar otro tipo de datos como lo son los números, 
            El contenido de las variable se mostrarán en el order en el que estemos indicandole en el comando de echo. 

-->
    <?php

    $TextoUno ="Estamos ";
    $TextoDos ="aprendiendo el uso ";
    $TextoTres ="de la concatenación en PHP.";  
    //usaremos el echo para concatenar el contenido de las variables, y usaremos los puntos gramaticales para poder concatenar.

    echo $TextoUno.$TextoDos.$TextoTres;//usamos los puntos gramaticales para poder concatenar el dato de las variables

    ?>
    
    </body>
</html>
