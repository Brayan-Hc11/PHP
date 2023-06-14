<!DOCTYPE html>
<html lang="es">
    <body>
        <!--
        Las funciones matematicas en PHP

        sqrt()
            Es una función que nos permite obtener la raiz cuadrada de un número 

            Ejemplo:

            $Número_cubo = 81;
            $Raiz_Cuadrada = sqrt($Número_cubo);

                Echo "La raiz caudrada de "."$Número"." es: ".$Raiz_Cuadrada;
        
        pow()
            Esta función nos permite hacer calculos de potencias, lo que quiere decir que nos permitirá realizar la exponenciación (**)

            Ejemplo:

            $Número_potencia = 4;
            $Potenciación = pow($Número_potencia,4);

                Echo "La potencia de ".$Número_potencia." es: ".$Potenciación;

        rand()
            Esta es una función que funciona de forma aleatoria,lo que quiere decir que nos imprimirá una valor aleatorio, para poder delimitar el rango de los núemros 
            especificaremos el rango que queremos que abarque en los parentesis de la función rand()

            $Número_aleatorio = rand();

                Echo "El número randow es:".$Número_aleatorio;
        abs()
            Esta función nos permite convertir un valor negativo a un valor positivo independiente de que sea integer o flotante
            
            $Número = -50;
            $abss = abs($Número);

                Echo "Este es el resultado de la converción: ". $abss."<br>";
    -->
        <?php
        # Función sqrt(), esta función nos permitirá obtener la raiz cuadrada de un número.
            $Número_cubo = 81;
            $Raiz_Cuadrada = sqrt($Número_cubo);

                Echo "La raiz cuadrada de ".$Número_cubo." es: ".$Raiz_Cuadrada."<br>";
        # Función pow(), esta función nos permite realizar potencias     
            $Número_potencia = 2;
            $Potenciación = pow($Número_potencia,2);

                Echo "La potencia de ".$Número_potencia." es: ".$Potenciación."<br>";
        # Función rand(), esta función nos permite umprimir una valor aleatorio    
            $Número_aleatorio = rand(1,10);

                Echo "El número randow es:".$Número_aleatorio."<br>";
        # Función abbs(), esta es una función que nos permite convertir un número negativo a positivo y biceversa.
        
            $Número = -50;
            $abss = abs($Número);

            Echo "Este es el resultado de la converción: ". $abss."<br>";

        ?>
    </body>
</html>
