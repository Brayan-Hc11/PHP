<!DOCTYPE html>
<html lang="es">

    <body>
        <?php
    /*
     Alcance Global y Local
        Una variable declarada fuera de una función tiene un ALCANCE GLOBAL y solo se puede acceder fuera de una función:
        Una variable declarada dentro de una función tiene un ÁMBITO LOCAL y solo se puede acceder dentro de esa función
    */

    #Interración con el usuario durante el inicio del programa 
        #definimos las constantes
        define("Titulo","<h1>Bienvenidos a la practica de funciones locales en PHP</h1>");
        define("Interacción","<p>Para esta practica estaremos realizando ejercicios basicos con las funciones locales y funciones matematicas.</p>");
        define("resultado",", el tipo de dato númerico que se encuentra en la función es: ");
            
            #Imprimimos las constantes en la pantalla
            Echo Titulo;
            Echo Interacción;

        # Declararemos la función local de suma 
        function SumaEnteros (){
            # declaración de las variables de la suma
            $x = 80;
            $y = 20;

                # iniciamos suma
                define("suma","<p>Para iniciar con la operaciones Aritmeticas estaremos realizando una suma:</p>");
                define("OpeSum","El resultado de la suma entre $x y $y es igual a:".$x = $x + $y);
                define("DatSum","<p>El tipo de dato que podemos obtener del resultado de la suma es: ");
                
                    #imprimimos  las constantes en la pantalla
                    print suma;
                    print OpeSum;
                    print DatSum;
                
                        # realizamos una consulta sobre el dato del resultado
                        var_dump($x);
        };
        # Declaración de la función local de resta
        function RestaEnteros (){
            #Declaramos las variables
            $x = 50.25;
            $y = 45.20;

            # iniciamos con la resta
            define("Resta","<p>A continuación realizaremos una resta entre datos numerícos flotantes:</p>");
            define("OpeRes","El resultado de la operación resta entre $x y $y es igual a: ".$x = $x - $y);
            define("DatRes","<p>El tipo de dato que que se optubo de la resta es: ");
                
                #imprimimos las constantes en la pantalla
                print(Resta);
                print(OpeRes);
                print(DatRes);
                    #realizamos una consulta para saber el tipo de dato que se encuentra en la resta
                    var_dump($x);
                        #procedemos a redondear el resultado
                        Echo "<p>redondearemos el resultado de la resta para hacerlo un int, el resultado final es: ";
                        print  round($x);
        };
        # Declaración de la función local de divición
        function DiviciónEntero(){
            #Declaramos las variables con los datos
            $x = 70;
            $y = 4;
                #iniciamos con la divición
                define("Divición","<p>A continuación realizaremos una divición entre datos numerícos enteros:</p>");
                define("OpeDiv","El resultado de la operación divición entre $x y $y es igual a: ". $x = $x / $y );
                define("DatDiv","<p>el tipo de dato que se encuentra resultante de la divición es: ");
                
                    #imprimios las constantes 
                    print(Divición);
                    print(OpeDiv);
                    print(DatDiv);
                        
                        #realizaremos una consulta sobre el tipo de dato
                        var_dump($x);

                            #Procedemos a redondear el resultado
                            Echo "<p>Redondearemos a un número superior el resultado de la divición para convertirlo en un int, el resultado final es: ";
                            print(round($x,0,PHP_ROUND_HALF_UP));// la salida ha de ser 18

        };
        #Iniciamos la multiplicaicón
        function MultiplicaciónEnteros(){
            #declaramos las variables
            $x = 5.25;
            $y = 10.02;
                #iniciamos con la multiplicación
                define("Multiplicación","<p>Por ultimo realizaremo la multiplicación entre datos numerícos flotantes:</p>");
                define("OpeMul","El resultado de la operación de multiplicación entre $x y $y es igual a: ".$x = $x * $y);
                define("DatMul","<p>el tipo de dato que se encuentra en el resultado de la multiplicación es: ");    

                    #imprimimos el contenido de las constantes
                    print(Multiplicación);
                    print(OpeMul);
                    print(DatMul);

                        #realizaremos una consulta sobre el tipo de dato
                        var_dump($x);

                            # procedemos a redondear a el número impar más cercano
                            Echo("<p>Redondearemos a un número impar cercano, el resulatado de la multiplicación final es: ");
                            print(round($x,0, PHP_ROUND_HALF_ODD));//redondeo al impar más cercano
        };       

            //imprimimos el contenido de cada función función local
            SumaEnteros();
            RestaEnteros();
            DiviciónEntero();
            MultiplicaciónEnteros();



        ?>    
    </body>
</html>
