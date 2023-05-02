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
                Ubicación de PHP (A)
                Variables (A)
                Concatenación (A)
                Comentarios (A)
                Saltos de lineas (A) 
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
            #variables de suma 
            $vals1 = 15;
            $vals2 = 21.5;
                $suma = $vals1+$vals2;

            Echo RES_SUM,$suma,". el valor númerico que se ve es un: ";
                var_dump ($suma);# Nos mostrará el valor que se encuntra dentro de la variable
            
        #Iniciamos con la resta
        define ("INI_RES","<br>"."<br>"."Iniciaremos con la resta con los valores predifinidos para realizar una resta."."<br>");
        define ("INI_RES2","Estos son los valores para la resta.");
        define ("_RES_VAL1"," Como primer digito para la resta será el :29.5, ");
        define ("_RES_VAL2"," como segundo digito para la resta seá el: 22.La operación final es de: (29.5-22= ). "."<br>");

        print INI_RES.INI_RES2._RES_VAL1._RES_VAL2;
        #Ejecución Ejercicio

        define ("RES_RES","Resulatado de la resta es: ");
            #variables resta
        $valr1 =29.5;
        $valr2 =22;
            $resta = $valr1-$valr2;

        print RES_RES.$resta.". el valor númerico almacenado es:";
            var_dump ($resta);
        



# Proceso por terminar............
        ?>
    </body>
</html>