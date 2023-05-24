# Temario del curso
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
    <meta chaset ="UTF-8">

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

La concatenación nos permite unir diferentes datos de variables con el fin de que se muestren en una sola linea o un solo dato. La concatenación la realizamos a través del echo y darle el orden que mas nos guste o nos convenga  a la hora de imprimirlo en pantalla, la concatenación solo se realiza a traves de un (.) o (,) en el caso de print. 
















