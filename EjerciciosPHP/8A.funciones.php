<!DOCTYPE html>
<html lang="es">
    <body>
        <!--
        Estaremos probando las diferentes funciones de Strings que nos permiten ver interacciones interesantes en las cadenas 
        de caracteres que elijamos.

            1.Strrev
                Es una funcion que nos permite visualizar el string original en una forma invertiva

                Ejemplo:
            $Texto0  = strrev("Esto es un texto inverso");
                Echo $Texto0;
                
            2.Strlen:
                Esta funcion nos permite contar los caracteres que se encuentran en el string incluyendo los espacios,
                la enumeración que se hace es de los caracteres por ende solo se verá el número de caracteres

                Ejemplo:
            $Texto1 = strlen ("Esto es una enumeración de caracteres")
                Echo $Texto1;
            
            3.str_word_count:
                Esta es una función que nos permite contar el número de palabras que se encuentran en el string

                Ejemplo:
            $Texto2 =str_word_count ("Esta es una enumeración de palabras");
                Echo $Texto2;

            4.strpos:
                Esta función nos pemite ver el posicionamiento que tiene un caracter en especifico dentro de una cadena de caracteres.
                la enumeración de las posiciones siempre inician desde cero de izquierda a derecha ademas de que debemsos concatenar el 
                caracter al que queremos buscar (las pocisiones empiezan a contrar desde cero) si queremos buscar la pocicion de un 
                caracter el cual este repetido siempre me mostrara el caracter que se encuentra en la pocicion mas cerca a la inicial.

                Al intentar ubicar un caracter el cual no esta dentro de la cadena de catacteres, no se imprimira nada en la pantalla.

                Ejemplo:
            $Texto3 = srtpos ("Buscaremos la posicion de un caracter","la");
                Echo $Texto3;

            5.Chunk_split:
                    La funcion de chunk_split nos permite agregar caracteres de espacio intermitentes entre las cadenas de caracteres,
                    para saber o prgramar los espacios que se veran en la linea de caracteres es necesario concatener el numero entero de 
                    espadicio en donde queremos que se vea el espacio
                
                Ejemplo:
            $Texto5 =chunk_split ("Esto es un String con espacios intermitentes",2);
                Echo $Texto5;
    -->
        <?php
        # Usando la función de strrev que nos permite invertir el string que se ubica al  interior de un parentesis
            $Texto0 = strrev("Esto es un texto invertido.");
                Echo $Texto0,"<br>";
            
        # Usando la función strlen que nos permite la enumeración de caracteres, solo será visible el número de caracteres.
            $Texto1 = strlen ("Esto es una enumeración de caracteres");
                Echo $Texto1,"<br>";
            
        # Usaremos la función de str_word_count que nos permite contar las palabras que se encuentran en un strig
            $Texto2 = str_word_count ("Esta es una enumeración de palabras");
                Echo $Texto2,"<br>";

        # Usaremos la función de strpos para poder ubicar y enumerar un caracter dentro de una cadena
            $Texto3 = strpos ("Buscaremos la posicion de un caracter","la");# concatenaremos el caracter que estamos buscando
                Echo $Texto3,"<br>";
            
            $Texto4 = strpos ("Buscaremos la posicion de un caracter repetido","a");
                Echo $Texto4,"<br>";#Al intenter buscar la posición de un caracter que se repita se nos mostrará la primera ubicación de este
            
        # Usaremos la función de chunk_split para agregar caracteres de espacios intermedios
            $Texto5 =chunk_split ("Esto es un String con espacios intermitentes",2);#El número concatenado nos permite saber donde se ubica el espacio
                Echo $Texto5;
        ?>
    </body>
</html>
