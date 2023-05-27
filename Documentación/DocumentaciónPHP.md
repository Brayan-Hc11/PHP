# Introducción a PHP 
Antes de continuar se debe de tener una compresión bácica de lo siguiente:
- [HTML](https://github.com/Brayan-Hc11/HTML5)
- [CSS](https://github.com/Brayan-Hc11/css3)
- [JavaScript](https://github.com/Brayan-Hc11/JavaScript)

Si desea aprender algunos de estos temas, pude revisar algunos de mis repositorios en donde podrá encontrar lo fundamental del desarrollo web

## ¿Qué es PHP?
PHP es un lenguaje sorprendete y pupular, PHP es lo suficientemente potente para ser el núcleo del sistema de blogs más grande de la web [WorPress](https://cloud.google.com/wordpress?utm_source=bing&utm_medium=cpc&utm_campaign=latam-CO-all-es-dr-SKWS-all-all-trial-p-dr-1009897-LUAC0016538&utm_content=text-ad-none-any-DEV_c-CRE_-ADGP_Hybrid%20%7C%20SKWS%20-%20MIX%20%7C%20Txt%20~%20Compute_Wordpress-KWID_43700067399687799-kwd-78203120058646%3Aloc-43&utm_term=KW_Wordpress-ST_Wordpress&gclid=f1719b1327d811e05b3eff6140fd1983&gclsrc=3p.ds&hl=es), PHP también es lo suficientemente profudo como para poder ejecutar grandes redes sociales y es bastante facil de aprender como para ser el primer lenguaje del  lado del servidor para un principiante 

- PHP es un acrónimo de "PHP: Procesadro de Hipertexto"
- PHP es un lenguaje de secuencias de código abierto ampliamente utilizado
- Los Scripts de PHP se ejecutan del lado del servidor  

## ¿Qué es un archivo PHP?

## Temario del curso
  - Ubicación del código PHP
  - Declaración de Variables
  - El Uso de la concatenación en PHP
  - El Uso de los comentarios en PHP
  - Los saltos de lineas en PHP
  - El uso de print en PHP
  - Tipos de datos en PHP
  - Funciones de Srtings 
  - Datos numéricos
  
# Etiquetas PHP

Cuando PHP analiza un fichero, busca las etiquetas de apertura y cierre, que son <?php y ?>, y que indican a PHP dónde empezar y finalizar la interpretación del código. Este mecanismo permite embeber a PHP en todo tipo de documentos, ya que todo lo que esté fuera de las etiquetas de apertura y cierre de PHP será ignorado por el analizador.Para poder generar nuestros primeros Scripts generaremos un documeto HTML, en donde agragaremos el código PHP, para incluir el código de PHP dentro de HTML es necesario usar sus etiquetas de apertura _(<?php y <?)_ apertura y cierre respectivamente.

## Ubicaciones del código PHP

Para poder ejecutar un fichero de PHP es necesario heberlo incluido antes en una estructura de HTML. Como primer ejercicio de PHP, generaremos nuestro "Hola mundo" en PHP, completamente funcional. Para esto escribiremos una estructura de HTML en donde incluiremos el código PHP en distintas ubicaiones en la que se puede definir el espacio de PHP dentro de HTML para su correcto funcionamiento. 

## ¿Donde escribimos el código PHP?

Podemos ubicar el código de PHP en dos pociciones dentro de HTML, lo podemos escribir en el body o lo podemos escribir en el head. 

- La primera ubicación que podemos usar dentro de HTML es en el *Head*, con esta ubicación podemos cargar mucho mas rapido el ejecutable, ya que el código se lee de arriba hacia abajo.

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

- En la segunda posicion lo ubicaremos en el *body* de HTMl, en esta posición tendremos un retraso para visualizar el php, y se mostrará por debajo del head o en la misma linea pero un poco despúes de haber usado el php en el head.

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

[Material de apoyo: Imprimiendo Un Hola mundo](https://github.com/Brayan-Hc11/PHP/blob/main/EjerciciosPHP/index.php "Ubicación de php")

## Declaración de Variables (Uso de variables)

En PHP la declaración de variables es muy importante para su correcta ejecución, ya que PHP es [case Sensitivity](https://en.wikipedia.org/wiki/Case_sensitivity) lo que quiere decir que es capaz de identificar y diferenciar entre mayúsculas y minúsculas. Para poder ejecutar de forma correcta en PHP debemos de respetar esta regla y tenerla en cuenta en cada momento para poder envitar fallos o errores. Para poder declarar una variable en PHP es indispensanble el uso del simbolo de dolar ($) que puedes obtenerlo con la combinación de teclas de shif + 4, depués del simbolo de dolar porcemos a asignar un nombre a la variable que quieras declarar, inmediatamente le asignaremos un valor a través del signo de asiganción (=), el dato que almacenara la variable dependera del usuario. al declarar el dato agregaremos un (;) al final de la instruccion. 

En la declaración de variables podemos escribir dos variables similares con una minima diferencia entre ellas, la declaración de varibles se estructuro en los metodos de escritura [upplecamelcase](https://www.neoguias.com/tipos-notacion-nombres/#Camel_Case_contarElementos "camelCase") y [lowercamelcase](https://www.neoguias.com/tipos-notacion-nombres/#Camel_Case_contarElementos "camelCase") para poder declarar las variables casesensitive.Para poder imprimir el contenido que se haya en las varibles escribirimos un Echo por cada una de las variables, ya que queremos que nos imprima el contenido por partes separadas o en distintas lineas de código, el orden en que se muestre el contenido o dato asignado a las variables depedende del orden en que se llamen o ejecuten en el Echo .

_EJmplo:_
Para este ejemplo Declararemos variables a traves del método de escritura Case Sesitivity, en donde declraremos la primera variable con las letras de cada palabra en mayúculas y la segunda variable la escribiremos completamente en minúsculas.

~~~
<!DOCTYPE html>
<html>
  <head>
    <meta charset ="UTF-8">

<title>Declaración de Variables Case Sensitivity.</title>

  <body>
    <?php

  $PrimerVariable = "Esta es la primera variable";
    Echo $PrimerVsriable;

  $primeravariable = "Esta es la segunda variable";
    Echo $primeravariable;

  </body>

</html>
~~~
[Material de apoyo: Declaración de variables](https://github.com/Brayan-Hc11/PHP/blob/main/EjerciciosPHP/CAP2Variables.php "Ejercicio dos ")

## Uso de la concatenación en PHP

La concatenación nos permite unir diferentes datos de variables con el fin de que se muestren en una sola linea o un solo dato. La concatenación la realizamos a través del echo y darle el orden que mas nos guste o nos convenga  a la hora de imprimirlo en pantalla, la concatenación solo se realiza a traves de un (.), La concatenación también la podemos realizar en una variable.

_Ejemplo:_
~~~
<!DOCTYPE html>
<html>
  <head>
    <meta charset ="UTF-8">
    <title>El uso de la concatenación en PHP</title>
  </head>

  <body>
    <?php
      $Primer = "Este es el primer texto, ";
      $Segundo = "Este es el sugundo texto, ";
      $Tercer = "y este es el tercer texto.";

  Echo $Priemer.$Segudo.$Tercer;
     ?>
  </body>
  </html>
~~~

---
[material de apoyo:El uso de la concatenación](https://github.com/Brayan-Hc11/PHP/blob/main/EjerciciosPHP/CAP3.PHP)

## El uso de los comentarios en PHP 

Los comentarios en PHP nos funcionan para poder comentar la función que realiza cada una de las partes del código, con el fin de cuando editemos el programa en un futuro lo podamos hacer mucho mas facil, si alguien mas va a editar nuestro código puede guiarse de los comentarios  para poder realizar estas ediciones y dejarlas comentadas. otra función muy importante de los comentarios es que nos permiten anular lineas de código con el fin de ser ignoradas por el navegador, existen dos tipos de comentarios en programación.

- Comentarios de primera linea: estos comentarios solo ocupan una linea de código, no se pueden estender demaciado ya que solo estan limitado a una sola linea, la ubicación de este comentario puede realizarse al final de la instrucción o encima de esta, pero si queremos que el navegador ignore esta instruccion lo unico que haremos es ubicar el comentario al pricipio o detras de la instrucción, para realizar un comentario de una sola linea escribimos (//) o (#) para iniciar el  comentario y para finalizar el comentario solo saltamos a la siguiente linea.

_Ejemplo:_
~~~

---
//Ubicamos el comentario de una sola linea por encima de la instrucción (no afecta a la instrucción)

$Variable "variable para el ejemplo";
  Echo $Variable;
  
$Variable2 "Variable para el ejemplo 2 ";//Ubicamos el comentario al final de la instrucción (No afecta a la instrucción)
  Echo $Variable;
  
//Ubicamos el comentario al inicio de la instrucción (Si afecta a la Instrucción) $Variable3 "Variable de ejemplo";
  Echo $Variable3; // esto ocacionara un error de inicialización ya que no para el navegador no esxite la variable
~~~

---
- Los comentarios multilinea: Estos comentarios van a ocupar bastas lineas de código, este tipo de comentarios se puede estender a lo largo de todo el código, la ubicacion de este tipo de comentarios puede variar pero se ajuesta a la necesidad del programador, este comentario nos permitirá ignorar por completo un código o grandes fragmentos de esté, para realizar un comentario multilinea escribiremos (/*) para iniciar el comentario y (*/) para finalizar en comentario.

_Ejemplo:_
El navegador no ha podido ejecutar el archivo o programa ya que el comentario multilinea a cubierto por completo al código.
~~~
/*Ubicamos el comentario multilinea al inicio del código (Ignorara todo el código)

  $Variable "variable para el ejemplo";
  $Variable2 "Variable para el ejemplo 2 ";
  $Variable3 "Variable de ejemplo";
  
  Echo $Variable.$Variable2.$Variable3;*/ 
~~~
[material de apoyo](https://github.com/Brayan-Hc11/PHP/blob/main/EjerciciosPHP/CAP4.PHP)

## Los saltos de linea en PHP

Los saltos de linea nos permiten separar o ditribuir la información en distintas lineas de código, esto con el fin de poder hacer el código mucho mas enetndible y ordenado, para poder realizar un salto de linea podemos usar la eiqueta de br de HTML que nos permite realizar estos saltos de linea o tambien podemo hacer uso de la (\) y seguio la letra N tal que asi (\n)  

_Ejemplo:_

~~~
<!DOCTYPE html>
<html>
  <head>
    <meta charset ="UTF-8">
    <title>El uso de la concatenación en PHP y saltos de lineas HTML</title>
  </head>

  <body>
    <?php
      $Primer = "Este es el primer texto, <br>";
      $Segundo = "Este es el sugundo texto,<br> ";
      $Tercer = "y este es el tercer texto.<br>";

  Echo $Priemer.$Segudo.$Tercer;
     ?>
  </body>
  </html>
~~~
[Material de apoyo:saltos de linea ](https://github.com/Brayan-Hc11/PHP/blob/main/EjerciciosPHP/CAP5.PHP)







