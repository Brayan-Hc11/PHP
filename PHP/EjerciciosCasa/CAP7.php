<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Tipos de datos dentro de php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <!--
        En php podemos identificar distintos tipos de entradas de datos que posemos usar en las variables:

            1. Stirgns:
                    Los Strins o cadenas de caracteres las usamos para poder visualizar el texto que alojamos en 
                    una varible, para posder visualizar un String es necesario colocar el tipo de dato dentro una
                    serie de comillas dobles o simples (los juegos de comillas  no se pueden usar de forma simultanea)
                    caracteres y finalizando con punto y coma al final de la instrucción.
                
                Ejmplo:

                    $String = "Usamos las comillas dobles o simples para imprimir un String.";
            
            2. Integers:
                    Los Integers son los caracteres que denominamos con caracteres númericos, estos caracteres se escribiran 
                    sin algún tipo de juegos de comillas tanto simples como dobles, este tipo de datos los podemos usar 
                    para hacer opreraciones arítmeticas
                
                Ejemplo:

                    $UnoI = 16 ;
                    $DosI = 45 ;
                    $sumaI = $Uno + $Dos ;

                        Echo "El resultado de la suma es:".$suma;
            
            3. Float:
                    Los Float son los caracteres que denominamos con caracteres númericos decímales, estos caracteres se 
                    escribiran sin necesidad de algún tipo de juego de comillas tanto dobles como simples, este tipo de datos 
                    se pueden usar en operaciones arítmeticas en donde los digitos o el resultado son decimales(en los caracteres
                    float es necesario el punto entre los números decimales).

                Ejemplo:

                    $UnoF = 1.5;
                    $DosF = 1.5;
                    $sumaF = $UnoF + $DosF;
                        Echo "El resultado de la suma es: ".$SumaF;
            
            4. Arrays:
                    Los Arrays son las variables que contienen en su interior multiples datos, los Arrays o arreglos en php no se pueden 
                    imprimir con el uso de un echo o un print ya que representa un error de sintaxis, para imprimir el contenido del 
                    Array es necesario usara la función de var_dum la cúal nos mostrará información sobre el Array.

                Ejemplo:

            $Colores = array("rojo","azul","verde","amarillo");
                var_dump ($Colores);
            
            5. Booleano:
                    Los datos booleanos solo nos permite tener dos tipos de datos como los son (true or false) verdadero o falso 
                    los caracteres boolenanos los podemos usar en las condicionales, para los datos booleanos es necesario usar 
                    la función de var_dump.

                Ejemplo:

            $Bool = true;
                var_dump ($Bool)
            
            6. Null:
                    Los datos Null son aquellos que representan la ausencia de un dato el cual nos da la opcion de reemplazar
                    en un futuro en la posición de una variable de un dato.

                Ejemplo:
            $vacia = null;
                var_dump ($vacia);



    -->
    <body>
        <?php

            #Uso del tipo de dato conocido como String (no se pueden usar los comillas simples y comillas dobles a la vez )
        $String = "Usamos las comillas dobles o simples para imprimir un String.";
            Echo $String."<br>";

            #Uso del tipo de dato conocido como Integers
            
        $UnoI = 16 ;
        $DosI = 45 ;
        $sumaI = $UnoI + $DosI ;        
            Echo "El resulatado de la suma es: ".$sumaI."<br>";

            #Uso del tipo de dato conocido como Float 
        
        $UnoF = 1.5;# si se usa una coma en vez de un punto obtendremos un error de sintaxis
        $DosF = 1.5;
        $SumaF = $UnoF + $DosF;
            Echo "El resultado de la suma es: ".$SumaF,"<br>";

            #Uso del tipo de dato conocido como Array
            
        $Colores = array("Rojo","Azul","Verde","Amarillo");#Los arrays funcionan solo con las comas, al implementar puntos se denomina como strings
            var_dump($Colores);
            
            #Uso del tipo de catacteres boolenanos
        $Bool = true;# Dato Booleano que solo oscila entre true or false
            var_dump($Bool);

            #Uso del tipo de dato null
        $vacia = null;# null es el valor que llega a ser reemplazado 
            var_dump($vacia);
        ?>
    </body>
</html>