<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Laboratorio 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <!--
        Este es el primer laboratorio de pruebas que se realiza con todo lo aprendido hasta ahora. Se estarán presentando operaciones básicas
        arítmeticas con lo que se a aprendido hasta el momento.

        Criterios de Laboratirio:
            1.Debe de contener  
                Suma
                Resta
                Multiplicación
                Divición
            2.Debe contener
                Variables
                Constantes
                Comentarios
                Funciones de strign
            3.Debe de ser presentable y funcional.
            4.Se bede evidenciar
                Ubicación de PHP 
                Variables 
                Concatenación 
                Comentarios 
                Saltos de lineas  
                Print y echo 
                Funciones de string (Cualquiera minimo 2)
                datos númericos 
                constanes

    -->
    <body>
        <?php
        #Usamos una constante para la imprimir valores fijos como interacciones 
        define ("INI_PRO","Demostración de operaciones basicas arítmerticas con php."."<br>"."<br>");
            Echo INI_PRO ;

        #iniciamos con la suma
        define ("INI_SUM","Iniciaremos con la suma con valores predifinidos."."<br>");
        define ("_SUM_VAL1","Estos serán los valores para la suma. como primer digito tendremos al 15,");
        define ("_SUM_VAL2","Como segundo digito tendremos al 21.5,");
        define ("_OPE_S"," la operación final es de: (15 + 21.5 = ) ");
        
            Echo INI_SUM._SUM_VAL1._SUM_VAL2._OPE_S."<br>";#imprimimos el valor de las constantes como mensajes.
        #Ejecución de ejercicio

        define ("RES_SUM","Resulatado de la suma: ");
            #variables de suma  y digitos de la suma.
            $vals1 = 15;
            $vals2 = 21.5;
                $suma = $vals1+$vals2;

            Echo RES_SUM,$suma,". el valor númerico que se ve es un: ";
                var_dump ($suma);# Nos mostrará el valor númerico que se encuntra dentro de la variable
            
        #Iniciamos con la resta
        define ("INI_RES","<br>"."<br>"."Iniciaremos con la resta con los valores predifinidos para realizar una resta."."<br>");
        define ("INI_RES2","Estos son los valores para la resta.");
        define ("_RES_VAL1"," Como primer digito para la resta será el :29.5, ");
        define ("_RES_VAL2"," como segundo digito para la resta seá el: 22.La operación final es de: (29.5-22= ). "."<br>");

        print INI_RES.INI_RES2._RES_VAL1._RES_VAL2;#imprimiremos el mesaje concatenado 
        #Ejecución Ejercicio

        define ("RES_RES","Resulatado de la resta es: ");
            #variables resta
            $valr1 =29.5;
            $valr2 =22;
                $resta = $valr1-$valr2;

        print RES_RES.$resta.". el valor númerico almacenado es:";
            var_dump ($resta);

        #Inciaremos con multiplicación 
        define ("INI_MUL","<br>"."<br>"."Iniciaremos con un programa de multiplicación sencilla. con los valores predifinidos. "."<br>");
        define ("INI_MUL2","Estos serán los valores que se usarán para la multiplicación que estaresmos realizando con php, "."<br>");
        define ("_VAL_MUL1","El primer valor que se usará en la multiplicacióon es :10, el segundo digito que se estará usando en la multiplicación es:5 ");
        define ("_VAL_MUL2","dando como resultado la operación de (10*5=)."."<br>");

            Echo INI_MUL.INI_MUL2._VAL_MUL1._VAL_MUL2;
        #inicio de operación 
        define ("RES_MUL","El resultado de la operacion es de: ");
            #variables que se usarán en la multiplicación
            $NUM_MUL1 = 10;
            $NUM_MUL2 = 5;
                $multiplicación = $NUM_MUL1*$NUM_MUL2;

            Echo RES_MUL.$multiplicación.". El valor númerico que econtramos almacenados es de: ";
                var_dump($multiplicación);# nos permite saber que tipo de dato se encuentra en la variable

        #inicio de la divición
        define ("INI_DIV","<br>"."<br>"."Iniciamos con una divción sencilla. con los valores predifinidos. "."<br>");
        define ("INI_DIV2","Los valores predifinidos para la operacion serán:"."<br>");
        define ("_VAL_DIV1","El valor que usaremos como primer digito será el: 100,");
        define ("_VAL_DIV2","como segundo valor de la divición usaremos el:20, dando como resultado la operación de: (100/20=)");

            Echo INI_DIV.INI_DIV2._VAL_DIV1._VAL_DIV2;

        #Iniciamos la operación
        define ("RES_DIV","<br>"."El resulatado de la divición es de:");
            $NUM_DIV1 = 100;
            $NUM_DIV2 = 20;
                $divición = $NUM_DIV1/$NUM_DIV2;

            Echo RES_DIV.$divición.". El tipo de valor que se encuentra en el resulatado es de: ";
                var_dump ($divición);

        ?>
    </body>
</html>