<!DOCTYPE html>
<html lang="en">
    <head>
        <title>La Función de redondeo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <!--
        La funcoión de redondeo en PHP

        Esta función nos permite redondear números foltantes al número entero mas cercano, esta función la podemos incluir en el Echo no hay necesidad de declararlo 
        en una variable o en una constante
        
        tipos de parametros para round()

            #Ejecución normal de round

        $número_decimal = 3583.5641587878;
        $número_entero = round ($número_decimal);

            Echo $número_entero;

            #Ejecución con parametros round()
        $Número_decimalp = 322.45454545415;
        $Número_enterop = round($Número_decimalp,3);
        
            Echo $Número_entero;

            #Ejecución de tercer parametro alto
        $Número_formulario = 0.5;
        $Número_enterof = round ($Número_formulario,0, PHP_ROUND_HALF_UP);

            Echo $Número_enterof;

            #EJecución de tercer parametro bajo
        $Número_Parametrob = 0.5;
        $Número_enteropb = round ($Número_Parametrob,0, PHP_ROUND_HALF_DOWN)."<br>";

            Echo $Número_enteropb;

            #Ejecución de tercer parametro pares nos redondea al par mas cercano 
        $Número_parametrop = 1.5;
        $Número_enteropp = round ($Número_parametrop,0, PHP_ROUND_HALF_EVEN)."<br>";

            Echo $Número_enteropp;

            #Ejecución de tercer parametro impares que nos redondea al impar mas cercano;
        $Número_parametroip = 2.5;
        $Número_enteroip = round ($Número_parametroip,0, PHP_ROUND_HALF_ODD)."<br>";

            Echo $Número_enteroip;


    -->

    <body>
        <?php
            #Ejecución normal de round

        $número_decimal = 3583.5641587878;
        $número_entero = round ($número_decimal);

            Echo $número_entero,"<br>";

            #Ejecución con parametros round()
        $Número_decimalp = 322.45454545415;
        $Número_enterop = round($Número_decimalp,3);
        
            Echo $Número_enterop,"<br>";

            #Ejecución normal de round 
            Echo round(355.4444)."<br>";

            #Ejecución de tercer parametro alto nos permite hacercarnos al entero superior 
        $Número_formulario = 0.5;
        $Número_enterof = round ($Número_formulario,0, PHP_ROUND_HALF_UP)."<br>";

            Echo $Número_enterof;

             #EJecución de tercer parametro bajo nos permite hacercarno al entero inferior 
        $Número_Parametrob = 0.5;
        $Número_enteropb = round ($Número_Parametrob,0, PHP_ROUND_HALF_DOWN)."<br>";

            Echo $Número_enteropb;

            #Ejecución de tercer parametro pares nos redondea al par mas cercano 
        $Número_parametrop = 1.5;
        $Número_enteropp = round ($Número_parametrop,0, PHP_ROUND_HALF_EVEN)."<br>";

            Echo $Número_enteropp;
            
            #Ejecución de tercer parametro impares que nos redondea al impar mas cercano;
        $Número_parametroip = 2.5;
        $Número_enteroip = round ($Número_parametroip,0, PHP_ROUND_HALF_ODD)."<br>";

            Echo $Número_enteroip;


        ?>
    </body>
</html>