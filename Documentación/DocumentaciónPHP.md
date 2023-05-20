# Primeros pasos en PHP

Para poder generar nuestros primeros Scripts generaremos un documeto HTML, en donde agragaremos el código PHP, para incluir el código de PHP dentro de HTML es necesario usar sus etiquetas de apertura _(<?php)_ y cierre _(<?)_.

## Primer ejercicio (Hola mundo)

Como primer ejercicio de PHP, generaremos nuestro "Hola mundo" en PHP, completamente funcional. Para esto escribiremos una estructura de HTML en donde incluiremos el código PHP en distintas ubicaiones en la que se puede definir el espacio de PHP dentro de HTML.

- podemos ubicar el código de PHP en dos pociciones dentro de HTML, la primero ubicación es el *head* 

~~~
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

<title> Ubicación del código PHP dentro del head.</title>

  <?php Echo "¡Hola mundo, te habla PHP desde el Head!";
  </head>

<body>
</body>

<html>
~~~

- En la segunda posicion lo ubicaremos en el *body* de HTMl

~~~
<!DOCTYPE html>
<html>
  <head>
    <meta chaset ="UTF-8">

<title> Ubicación del código de PHP dentro del body.</title>

<body>
  <?php Echo "¡Hola mundo, te habla php desde el body.!";
</body>

</html>
~~~

[Material de apoyo](https://github.com/Brayan-Hc11/PHP/blob/main/EjerciciosPHP/index.php "Ubicación de php")

## Segundo ejercicio (Uso de variables)

En PHP la declaración de variables es muy importante para su correcta ejecución, ya que PHP es casesensiteve lo que quiere decir que es capaz de identificar y diferenciar entre mayúsculas y minúsculas. Para poder ejecutar de forma correcta en PHP debemso de respetar esta regla y tenerla en cuenta en cada momento para poder envitar fallos o errores.
 
Para poder declarar una variable en PHP es indispensanble es uso del simbolo de dolar ($) que puedes obtenerlo con la combinación de teclas de shif + 4, seguido del nombre de la variable que le aquieras asignar,inmediatamente le asignaremos un valor a través del signo de (=) seguido del tipo de dato que queramos almacenar
 
~~~
<!DOCTYPE html>
<html>
  <head>
    <meta chaset ="UTF-8">

<title>Declaración de variables </title>

<body>
  <?php 
    
 // Uso de las primeras variables casesensitive upplecamelcase 
    $PrimeraVaraible = "Mi primera variable en PHP";

// Escritura en upplecamelcase
    $primeravariable = "Mi primera variable en php";
    
</body>

</html>
~~~

En este ejemplo hemos declarado dos variables con una diferencia entre ellas, la declaración de varibles se estructuro en los metodos de [upplecamelcase](https://www.neoguias.com/tipos-notacion-nombres/#Camel_Case_contarElementos "camelCase") y [lowercamelcase](https://www.neoguias.com/tipos-notacion-nombres/#Camel_Case_contarElementos "camelCase") para poder hacer estas variables casesensitive

Para poder imprimir el contenido que se haya en las varibles escribirimos un Echo por cada una de las variables, ya que queremos que nos imprima el contenido por partes separadas.

~~~
<!DOCTYPE html>
<html>
  <head>
    <meta chaset ="UTF-8">

<title>Declaración de variables </title>

<body>
  <?php 
    
 // Uso de las primeras variables casesensitive upplecamelcase 
    $PrimeraVaraible = "Mi primera variable en PHP";

// Escritura en upplecamelcase
    $primeravariable = "Mi primera variable en php";

// Imprimimos las variables en pantalla
  Echo  $PrimeraVaraible;
  Echo  $primeravariable;
    
</body>

</html>
~~~

El orden de los Echo modifica el orden en que queremos visualizar el dato de las variables. dependiendo del orden de los Echo veremos el contenido de las variables en distintas lineas.

[Declaración de variables](https://github.com/Brayan-Hc11/PHP/blob/main/EjerciciosPHP/CAP2Variables.php "Ejercicio dos ")
