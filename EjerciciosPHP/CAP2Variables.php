<!DOCTYPE html>

<html >
    <head>
        <meta charset="UTF-8">
        <title>El uso de las varibles en php.</title>
    </head>

<body>
    <!--
        Php es casesensitive lo que quiere decir que distinge entre mayúsculas y minúsculas a la hora de asignar valores a las varivables
        eso nos permite tener mas de una variable con el mismo nombre pero con distintos resultados.

        Las variables se deben de asignar con el sinbolo de pesos $.
        Para el uso de las variables de tipo stricks o de cadena de caractes usamos las comillas dobles y para los int no se usan.
        
        para poder ver el contenido de una variable es necesario imprimirla en la pantalla con ayuda del comando de echo.
    -->
    <?php
        $inicial="Estaremos realizando las operaciones aritmeticas simples mediante el uso de variables."."\n";
            echo $inicial;

            //Iniciamos con  la suma
        echo"Asignaremos los valores previos de cada una de las operaciones que realizaremos. 
                Los valores de la suma serán de: primer digito tendra en valor de 11 y el segundo
                    digito tendrá un valor de 10 dando como resualtado 21"."\n";
            
            $digitoUno = 11 ;
                echo "Este el primer digito de la suma:",$digitoUno;

            $digitoDos = 10 ;
                echo "Este es el segundo digito de la suma:",$digitoDos;

            $suma = $digitoUno + $digitoDos ;//inicializamos una tercera variable en donde se registrarán los resulados del suma.
                echo "Este es el resulatado de la suma:",$suma;

            //Iniciamos con la resta
        echo "Asignaremos los valores previos de cada una de las operaciones que realizaremos. 
                Los valores de la resta serán de: primer digito tendra en valor de 15 y el segundo
                    digito tendrá un valor de 12 dando como resualtado 3"."\n";
            
            $digitoUnoR = 15;
                echo "Este es el primer digito de la resta:",$digitoUnoR;
                
            $digitoDosR = 12;
                echo "Este es el segundo digito de la resta:",$digitoDosR;

            $resta = $digitoUnoR - $digitoDosR;
                echo "Este es el resultado de la resta:",$resta;

            //Iniciamos con la multiplicación
        echo "Asignaremos los valores previos de cada una de las operaciones que realizaremos. 
                Los valores de la multiplicación serán de: primer digito tendra en valor de 25 y el segundo
                    digito tendrá un valor de 10 dando como resualtado 250"."\n";
            
            $digitoUnoM = 25;
                echo "Este el primer digito de la multiplicaión:", $digitoUnoM;

            $digitoDosM = 10;
                echo "Este es el segundo digito de la multiplicaión:", $digitoDosM;

            $multiplicación = $digitoUnoM * $digitoDosM;
                echo "Este es el resultado de la multiplicación:", $multiplicación;

            //Iniciamos con la divición 
        echo "Asignaremos los valores previos de cada una de las operaciones que realizaremos. 
                Los valores de la división serán de: primer digito tendra en valor de 50 y en segundo
                    digito tendrá un valor de 5 dando como resualtado 10"."\n";

            $digitoUnoD = 50;
                echo "Este es el valor del primer digito de la divición:", $digitoUnoD;

            $digitoDosD = 5;
                echo "Este es el valor del segundo digito de la divición:", $digitoDosD;

            $divición = $digitoUnoD / $digitoDosD;
                echo "Este es el resultado de la divición:", $divición;
    ?>
    
</body>
</html>