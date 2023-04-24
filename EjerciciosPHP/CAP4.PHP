<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El uso de los comentarios en php.</title>
</head>
<!--
    Los comentarios dentro de php nos permitira ignorar lineas de codigo o incluso comentar que hace cierta linea de código.
    con el fin de poder tener documentación sobre el programa haci a la hora de volver a editar un programa será mucho mas 
    facil si este está muy bien comentariado.

    Tipos de comentarios

        1.comentario de una sola linea: 
            los comentarios de una sola linea en php son aquellos que solo se podrán usar en una 
            sola linea del código y se representan usando el (/) y el (#).

        2.Comentarios de varias lineas o multilinea:
            Los comentarios de varias lineas en php son aquellos que se pueden usar en partes muy extensas de código 
            o apartir de tan solo dos lineas de código, se representan usando el(/**/)
-->
<body>
    <?php
        Echo "Estaremos aprendiendo sobre los comentario, Los comentarios de una sola linea no permiten ver la siguiente linea";
            //Echo "Los comentarios de una sola linea no permiten que me veas";
            # También podemos usar la almuadilla para hacer comentarios de una sola linea.
        Echo "Estaremos usando los comentarios de  multilinea, Los comentarios de  multilinea no permetiran ver las siguientes lineas.";
            /*
                echo "los comentarios multilinea no permiten que me veas";
                echo "los comentarios multilina tampoco permiten que tu me veas"; 
            */

    ?>
</body>
</html>