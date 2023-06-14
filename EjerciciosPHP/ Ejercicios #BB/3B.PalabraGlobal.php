<!DOCTYPE html>
<html lang="es">
    <body>
        <?php
    /*
    La  palabra clave global se utiliza para acceder a una variable global desde dentro de una función.
    Para hacer esto, use la globalpalabra clave antes de las variables (dentro de la función):
    */

    #iniciamos el programa
    define("Inicio","<h1>Bienvenidos a nuestro primer programa con palabras reservadas, en donde daremos un uso a la palabra clave Global</h1>");
    define("Desarrollo","<p>Para el desarrollo del programa solo realizaremos una consulta en donde usaremos la concatenación");

        #Imprimos las constantes en la pantalla
        Echo Inicio;
        Echo Desarrollo;
        
            #declaramos las variables
            $textUno = "<h2>Laravel ¿Qué es y cómo funciona?</h2>";
            $textDos ="<P>Hoy te voy hablar de uno de los frameworks de PHP más usados y mejor valorados por la comunidad de desarrolladores.</P>";
            $textTres = "<p>Laravel no ha parado de crecer desde que empezó a coger notoriedad por 2014. Desde entonces sigue en constante evolución,";
            $textCuatro= "implementando mejoras en su arquitectura y seguridad, y siendo hoy día uno de los frameworks mas demandados por las empresas";
                #declaramos las funciones
                function Titulo(){
                    global $textUno;//iniciamos un titulo
                        Echo $textUno;
                };

                function Entrada(){
                    global$textDos,$textTres,$textCuatro;
                        Echo $textDos,$textTres,$textCuatro;
                };

                    #imprimimos el contenido de cada función
                    Titulo();
                    Entrada();
                        
            


        ?>
    </body>
</html>
