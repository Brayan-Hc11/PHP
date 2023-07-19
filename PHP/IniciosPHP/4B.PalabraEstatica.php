<!DOCTYPE html>

<html lang="es">
    <body>
        <?php
        /*
        Palabra clave estatica (static)

        Normalmente, cuando se completa/ejecuta una función,se eliminan todas sus variables.
        Sin embargo, aveces queremos que NO se elimine una variable local. lo necesitamos para otro trabajo.
        para hacer esto, use la palabra clave reservasda "static" cuando declara la variable por primera vez 
        */

        /*inciamos la interracción con el usuario*/
        define("Inicio","<h1>Uso de la palabra static</h1>");

        define("parrafo","<p>Static es una palabra clave reservada que nos  permite mantener el valor a una variable.para poder saber que es lo que hace 
                la palabra reservada static realizaremos una concatenación global para formar un parrafo.El parrafo tratará sobre programación</p>");

            #imprimimos las constantes en la pantalla
            Echo Inicio, parrafo;

        #declaramos la función 
        function Texto1 (){
            #declaramos static con la primera linea del parrafo
            static $Txt1= "" ;

        };
        ?>
    </body>
</html>