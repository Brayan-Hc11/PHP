<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <!--
        Los distintos tipos de datos númericos que podemos encontrar en php, ya sabemos que tipo de datos númericos existen pero que pasa
        cuando queremos imprimir el valor del tipo de dato que se encuentra en una variable para eso usaremos el comado de var_dump que 
        sera capaz de imprimir el tipo de valor que le asignamos a la variable.

            Ejemplo:
        Usaremos los distintos tipos de datos númericos para los ejmplos.

        $Int = 10;
            var_dump($inter); datos númericos de tipo enteros.
        
        $Flo = 10.5;
            var_dump ($flo); datos númericos de tipo flotante.

        Para poder usar los números binarios es necesario saber usar el prefijo 0b para expresar un número  binario como entero.

        $Bin = ob10;
            var-dump ($Bin); datos númericos de tipo binario.

        Para poder usar los números octales es necesario saber los limites de 0-7 para expresar los valores octales

        $Oct =010;
            var_dump ($Oct);
        
        Para poder usar los número hexadecimales puede contener números del 0-9 y letras de la A a la F 
        $Hex = 0x08a;
            var_dump ($Hex); 

    -->

    <body>
        <?php
        #Ejemplo Número 1: Usaremos un dato de tipo integer para este primer ejemplo:
        $Int = 10;
            var_dump($Int);

        #Ejemplo Número 2: Usaremso un dato de tipo float o decimal para este segundo ejemplo:
        $Flo = 10.5;
            var_dump($Flo);
        #Ejemplo Número 3: Usaremos un dato de tipo binario para este ejemplo.
        $Bin = 0b10;
            var_dump($Bin);#para los números binarios es necesario utilizar el prefijo de 0b
        #Ejemplo Número 4: Usaremos un dato de tipo octal
        $Oct = 010;
            var_dump($Oct);#para los números octales es necesario utilizar el 0 en un limite de 0-7 para representar los número octales
        #Ejmplo Número 5: Usaremos un dato de tipo hexadecimales
        $Hex = 0x08a;# para los números Hexadecimales es necesario usar la abreviación 0x seguida de un numero de 0 a 9 depues una letra de A a la F
            var_dump($Hex);

        #Ejercicio simple divición

        $num1 = 15;# La divición entre números enteros nos permite un resultado en float
        $num2 = 16;
        $Resultado = $num1/$num2;
            var_dump($Resultado)
        
        ?>
    </body>
</html>