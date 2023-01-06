<!DOCTYPE html>
<htm>
    <head>
        <meta charset="utf-8">
        <title>
            Curso de php:capitulo 3 cadenas de caracteres
        </title>
    </head>

    <body>
        <header>
            <h1>
                Cadenas de caracteres
            </h1>
        </header>
<!--inicio de codígo de php -->
        <aside>
            <?php
#uso de la cancatenación en php 
            $texto1 = "Bienvenidos al ";
            $texto2 = "capitulo n°";
            $numero = 3;
            $texto3 = " del curso de php - mysql";
            
                echo $texto1 . $texto2 .  $numero . $texto3;

#saltos de linea en php con html 

            $Texto1 = "texto numero 1  <br>";
            $Texto2 = "texto numero 2  <br>";
            $Texto3 = "texto numero 3  <br>";
            $Texto4 = "texto numero 4  <br>" ;

                print    $Texto1 . $Texto2 . $Texto3 . $Texto4;
 
            ?>
        </aside>
    </body>
</htm>