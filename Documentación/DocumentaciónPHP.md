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
