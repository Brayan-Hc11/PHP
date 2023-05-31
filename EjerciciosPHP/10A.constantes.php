<!DOCTYPE html>
<html lang="es">
    <body>
        <!--
     Las constantes en php,  las constantes en php son contenedores como las variables pero la diferencia fundamental es que las constantes 
    almacenan un valor que no va poder ser cambiado durante la ejecución del Scring, las constantes las definiremos una vez y mientrás se 
    este ejucutando dicho código no van a poder ser modificadas, para las constantes usaremos la palabra reservada define() es una función 
    del lenguaje de php.  require de dos argumentos obligatorios y un tercer argunto opcional.
    
        1.El primer parametro de la constante es el nombre que le daremos a la constante, el nombre debe estar estar escrito en 
        mayusculas
        
        2:En el segundo parametro debemos de escribir el dato que queremos que se muestre en le código de ejecución puede ser un scring 
        o un número (para escribirlos debemos de tener en cuenta condiciones de cada uno de ellos como las comillas)

        3: En el tercer parametro debemos de usar un valor booleano, lo que quiere decir que si escribimos el valor de true la constante 
        será definida como case insensitive (que es insencible a mayusculas y minusculas), el valor booleano de true nos imprimira 
        un warning en pantalla.

    Declaración de constantes en php.
        Normas basicas para poder escribir una constante de php 

        1. El nombre de las constantes se debe de escribir en mayusculas siempre que las inicialicemos.
        2. El nombre de las constantes se debe de escribir siempre entre comillas dobles.
        3. El nombre de las constantes debe de empezar por una letra(X) o un guion bajo (_)

        Estructura completa de una constante 

            define(Nombre_constante'valor''bool');
    
        Ejemplo:

    define ("PI" ,3.141593);
        Echo PI;

    
        Ejemplo con valor booleano:
    
    define ("Texto","Uso del valor booleano",False); EL valor de true no puede ser ejecutado ya que nos imprimira un warning    

-->
        <?php
        #Primera constante
    define ("PI" ,3.141593);#Con var_dump() Podemos ver el contenido que se haya en la constante
        Echo PI;
        #Segunda constante:Uso de un valor Booleano
    define ("Texto","Uso de valor booleano", false );# EL valor de true es posible que nos imprima un warning
        Echo Texto;

        #Tercera constante: Uso de una constante maligna
        /*
        Para esta constante pódremos usar una palabra reservada para el nombre de la constante.Para poder imprimir el valor que se haya dentro 
        de la constante usaremos el comando constant() que nos permitira ver el valor que se encuentra en la constante.
        */
    define ("echo","Uso de una constante maligana");# Este uso de la constante es un uso de erro de las constantes
        Echo constant("echo");# Es no es recomendable usarlo ya que es una mala practica.

        ?>
    </body>
</html>
