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

Para poder ejecutar un fichero de PHP es necesario heberlo incluido antes en una estructura de HTML. Como primer ejercicio de PHP, generaremos nuestro "Hola mundo" en PHP, completamente funcional. Para esto escribiremos una estructura de HTML en donde incluiremos el código PHP en distintas ubicaiones en la que se puede definir el espacio de PHP dentro de HTML para su correcto funcionamiento. Podemos ubicar el código de PHP en dos pociciones dentro de HTML, 

- La primera ubicación que piodemos usar dentro de HTML es en el *Head*, si el código se lee de arriba hacia abajo 

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

[Material de apoyo: Imprimiendo Un Hola mundo](https://github.com/Brayan-Hc11/PHP/blob/main/EjerciciosPHP/index.php "Ubicación de php")

## Segundo ejercicio (Uso de variables)

En PHP la declaración de variables es muy importante para su correcta ejecución, ya que PHP es casesensiteve lo que quiere decir que es capaz de identificar y diferenciar entre mayúsculas y minúsculas. Para poder ejecutar de forma correcta en PHP debemos de respetar esta regla y tenerla en cuenta en cada momento para poder envitar fallos o errores.
 
Para poder declarar una variable en PHP es indispensanble el uso del simbolo de dolar ($) que puedes obtenerlo con la combinación de teclas de shif + 4, seguido del nombre de la variable que le quieras asignar,inmediatamente le asignaremos un valor a través del signo de (=) seguido del tipo de dato que queramos almacenar

## Tipos de datos 

Al declara variables en PHP podemos asignar determinado tipo de dato, tanto númerico como cadena de caracteres. En PHP podemos hacer uso de distintos tipos de datos, pero para iniciar solo usaremos los dos mas comunes que son 

- Datos Strings o cadenas de caracteres, se usan para representar los datos de escritura o texto lo quiere decir que se usa para la representación de letras y palabras, para definir un Strings usaremos las comillas dobles ("") en su interior ubicaremos el texto que queremos imprimir en pantalla

_Ejemplo:_

En este primer ejemplo usamos las comillas para almacenar el String que queremos imprimir. La instrucción nos indica que el dato String se encuentra asignado en el espacio de memoria conocido como "$PrimeraVariable".

~~~
<?php 
   $PrimeraVaraible = "Mi primera variable en PHP";
?>
~~~

- Datos númericos: PHP tambien nos permite usar datos númericos para realizar las tareas es donde requieras de represerntar de forma grafica elementos, lo que quiere decir que para enumerar un elemento no es necesario escribir el número el letras si no que podemos escribirlo con el número correspondiente. los tipos de datos númericos son:
      - Integers o enteros que como su nombre lo define su función es contar y alamacenar datos de números enteros.
      
_Ejemplo:_

~~~
<?php 
   $PrimeraVaraibleInt = 10;
?>
~~~
  - Floats o Flotates: su finción es poder almacenar datos de tipo Númerico flotante o reales en donde destacan los números reales.
  
_Ejmplo:_

~~~
<?php 
   $PrimeraVaraibleFloat = 15.2222222;
?>
~~~
Lo que destaca de las variables Númericas es que podemos ejecutarlas sin necesidad de que se encuentren entre comillas. Ademnás de poder realizar commplejas operaciones arítmeticas.

## Declaración de Variables

La declaración de variables en programación, es uno de los pasos mas importantes de a la hora de programar, la función de las variables es poder almacenar distintos tipos de datos al interior de ellas con la opción de poder cambiar el dato que se encuentra lamacenado o de que este dato varie. a continuación un ejemplo de la declaración de variables en PHP.

_Ejemplo:_

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
  ?>
  
</body>
</html>
~~~

En este ejemplo hemos declarado dos variables con una diferencia entre ellas, la declaración de varibles se estructuro en los metodos de escritura [upplecamelcase](https://www.neoguias.com/tipos-notacion-nombres/#Camel_Case_contarElementos "camelCase") y [lowercamelcase](https://www.neoguias.com/tipos-notacion-nombres/#Camel_Case_contarElementos "camelCase") para poder declarar las variables casesensitive.

Para poder imprimir el contenido que se haya en las varibles escribirimos un Echo por cada una de las variables, ya que queremos que nos imprima el contenido por partes separadas o en distintas lineas de código, el orden en que se muestre el contenido o dato asignado a las variables depedende del orden en que se llamen o ejecuten en el Echo .

~~~
<!DOCTYPE html>
<html>
  <head>
    <meta chaset ="UTF-8">

<title>Declaración de variables </title>

<body>
  <?php 
 // Declaramos las variables con nombres similares pero escritos es metodos camelCase distintos.

 // Escritura en Upplecamelcase
    $PrimeraVaraible = "Mi primera variable en PHP";

// Escritura en lowercamelcase
    $primeravariable = "Mi primera variable en php";

// Imprimimos las variables en pantalla
  Echo  $PrimeraVaraible; // Primer valor que se imprime en la pantalla.
  Echo  $primeravariable; //Segundo valor que se imprime en la pantalla.
?>
    
</body>

</html>
~~~

_Nota:_
El orden de los Echo modifica el orden en que queremos visualizar el dato de las variables. dependiendo del orden de los Echo veremos el contenido de las variables en distintas lineas.

[Material de apoyo: Declaración de variables](https://github.com/Brayan-Hc11/PHP/blob/main/EjerciciosPHP/CAP2Variables.php "Ejercicio dos ")
