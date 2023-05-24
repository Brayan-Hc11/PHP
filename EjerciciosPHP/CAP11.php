<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Las funciones matemáticas max(), min() y pi()</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
<!--
    Las funciones matemáticas  max(), min() y pi() dentro de php. Estas funciones matemáticas nos permiten ubicar o localizar un caracter deteminado 
    dentro de una serie determinada de caracteres numericos

    La función matemática Max()
        Está función nos permite ubicar el caracter mayor dentro de una serie de caracateres especificos, lo hace mediante la comparación de caracteres numericos ordenadolos 
        de mayor a menor, pero solo va hacer vissible en caracter de mayor longitud o mayor cifra 

        Ejmplo :
    En este ejemplo usaremos una serie de caracteres de numeros, no mayores a tres cifras a exepcción de uno que será el que veremos en el resualtado.
         
        $Num_Max = Max(100, 50 ,20 ,36 ,90 ,48);

        Echo "El resultado final es: ",$Num_Max;

    La función matemática Min()
        Está función nos permite ubicar el caracter de menor valor dentro de una serie de caracteres especificos, al igual que Max () lo hace mediante la comparación de 
        caracteres numéricos ordenandolos de mayor a menor, pero solo se hará visible el caracter de menor valor.
        
        Ejemplo:
    En este ejemplo usaremos una serie  de caracteres numericos, mayores a tres cifras a exepcción de uno que será el que veremos en el resultado.

        $Num_Min = min( 100, 20 ,50 ,4 ,50);

            Echo "El resultado final es: ", $Num_Min;

    Las funciones matemáticas tambien nos permite usar variables anidadas, lo que quiere decir es que podemos concatenar una variable que contenga un valor numeríco.

        Ejemplo:

        $Num1 = 10

        $Num_MIN = Min($Num1, 15, 14, 20, 23);

            Echo "El ressultado final es: ",$Num_MIN;
            
    La función matemática pi () nos permite completar en un espacio el valor numerico de pi sin necesidad de ingresarlo desde le teclado o digitarlo.
    
        Ejemplo:

        Define ("PI", PI());
            Echo PI;

        Ejercicio 
    Calcular el area de un circulo usando la función PI
-->

    <body>
        <?php

        $Num_Max = Max(100, 50 ,20 ,36 ,90 ,48);
        $Num_Min = min( 100, 20 ,50 ,4 ,50);
        $Num_MIN = Min(3, 15, 14, 20, 23);
        

            Echo "El resultado final es: ",$Num_Max,"\n";
            Echo "El resultado final es: ", $Num_Min,"\n";
            Echo "El resultado final es: ",$Num_MIN,"\n";
         
        /*calcular el area de un circulo con la función de pi()*/
        
        define ("PI", PI()); 
        $radio = 2;
            $resultado = PI *$radio *$radio;

        Echo "Este es el resultado: ".$resultado;
        
        ?>
    </body>
</html>
