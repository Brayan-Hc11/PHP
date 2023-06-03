<!DOCTYPE html>
<html lang="es">
    
    <body>
        <?php
    /*
     Alcance Global y Local
        Una variable declarada fuera de una función tiene un ALCANCE GLOBAL y solo se puede acceder fuera de una función:
    */

    #Interración con el usuario durante el inicio del programa 
        #definimos las constantes
        define("Titulo","<h1>Bienvenido a la practica de las funciones globales</h1>");
        define("Interacción","<p>Para esta practica estaremos realizando ejercicios basicos con las funciones globales y funciones matematicas.</p>");
        define("resultado",", el tipo de dato númerico que se encuentra en la función es: ");
            #imprimimos las constantes
            Echo Titulo;
            Echo Interacción;

        #declaración de variables 
     $x = 10;
     $y = 30;
        #suma de enteros
            define("Suma","<p>Para comenzar estaremos realizando una suma de enteros con las funcones globales.</p>");
                Echo Suma;
            #Inicio de la función global "sumaEnteros"    
        function sumaEnteros(){
            # Al ser una función de uso global no declaramos Echo local o al interior de la función.
        };
            #Llamamos a la función de forma Global
            sumaEnteros(); //Nombramos a la función e imprimimos
            
                Echo "El resulatado de la suma entre $x y $y es igual a: ". $y = $x + $y;//Declaramos Echo para imprimir en pantalla la operación y el resultado de esta.
                    Echo resultado;//Realizamos una consulta para poder saber el dato que se encuentra en $y
                        var_dump($y);//Imprimimos el tipo de dato que encontramos almacenado en la variable de $y
        
        #Resta de enteros
            define("resta","<p>A continuación realizaremos una resta usando números enteros con el uso de las funciones Globales</p>");
                Echo resta;
            #Declaramos la función global "restaEnteros"
        function restaEnteros (){
            # Al ser una función global no declararemos Echo al interior de la función
        };
            #Llamamos a la función desde afuera.
            restaEnteros();//procedemos a realizar la resta
            /* 
            El resultado de la resta ha de ser -30 ya que $y aún mantendrá
            el ultimo dato que almacenamos al interior de ella en la suma de enteros 
            */

                Echo "El resultado de la resta entre $x y $y es igual a: ". $y = $x - $y;//Declaramos Echo para imprimir en pantalla la operación y el resultado.
                    Echo resultado;//Realizamos una consulta para poder saber el dato que se encuentra en $y
                        var_dump($y);#Imprimos el dato númerico que encontramos en la resta

        #Divición de enteros y conversión
            define("divición","<P>Realizaremos un divición usando lo número enteros con el uso de las funciones globales y funciones de conversión matematíca</P>");
                Echo divición;
            #Declaramos la función Global "diviciónEnteros"
        function diviciónEnteros(){
            // no declaramos Echo en el interior de una función global
        };
            #Llamamos a la función desde afuera
            diviciónEnteros();// en esta operación es necesario invertir el valor actual de $y para esto usares una función matematica
                $Inv = abs($y);#usamos la función abs para poder invertir -30 a 30
                    Echo "El resultado de la divición entre $x y $Inv es igual a: ".$y = $Inv / $x;//incluimos la función de converción
                        Echo resultado;//Realizamos una consulta para poder saber el dato que se encuentra en $y
                            var_dump($y);//imprimimos en la pantalla el dato que se encuentra almacenado en la variable de $y

        #Multiplicación de enteros
            define("multiplicaicón","<p>por ultimo tendremos la multiplilcación usando los números enteros y las funciones globales</p>");
                Echo multiplicaicón;
        #declaramos al función "multiplicaciónInt"
        function multiplicaciónInt(){
            //no declramos ECho al interior de la función
        };
            #Llamamos a la función desde afuera
            multiplicaciónInt();//inciamos la función de multiplicación
                Echo "El resultado de la multiplicación entre $x y $y es igual a: ". $y = $x * $y;//realizaremos la operación
                    Echo resultado;//Realizamos una consulta para poder saber el dato que se encuentra en $y
                        var_dump($y);// imprimimos en la pantalla  el ultimo valor asignado a $y
        ?>
    </body>
</html>