# Ruta de aprendiaje PHP

- PHP INICIO
- Introducción PHP
- Instalación de PHP
- Sintaxis PHP
- Comentarios PHP
- Variables PHP
- PHP Echo / Imprimir
- Tipos de datos PHP
- Cadenas PHP
- Números PHP
- Matemáticas PHP
- Constantes PHP
- Operadores PHP
- PHP Si... Más... Elseif
- Cambio de PHP
- Bucles de PHP
- Funciones PHP
- Matrices de PHP
- Superglobales de PHP
- PHP expresión regular

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

Los archivos PHP pueden contener texto, HTML, CSS, JavaScript y código PHP. El código PHP se ejecuta en el servidor y el resultado se devuelve al navegador como HTML simple, los archivos PHP tienen la extención _".PHP"_

## ¿Qué puede hacer PHP?
- PHP puede generar contenido de página dinámico
- PHP puede crear, abir, leer, escribir, eliminar y cerrar archivos en el servidor
- PHP puede recopilar datos de formulario
- PHP puede enviar y recibir cookies
- PHP puede agregrar, eliminar, modificar datos en base de datos
- PHP se puede usar para controlar el acceso de los usuarios  

Con PHP no está limitado a generar HTML. puede generar imágenes o archivos PDF. También puede generar culaquier texto, como [XHTML](https://books.google.cl/books?hl=es&lr=&id=aaa6EAAAQBAJ&oi=fnd&pg=PA1&dq=Que+es+XHTML+&ots=dpvIvfdlm6&sig=jLY4kEWVofozaOsoWCCt_SFvlDg#v=onepage&q=Que%20es%20XHTML&f=false) y [XMl](https://www.google.com.co/books/edition/XML_pr%C3%A1ctico/x6QToh9wHMYC?hl=es&gbpv=1&dq=Que+es+XML&printsec=frontcover).

## ¿Por qué PHP?
- PHP se ejecuta en varias platatoformas _(Windows, Linux, Unix, Mac Os x, etc...)_
- PHP soporta una amplia gama de base de datos
- PHP es gratis, y puedes descargarlo en [PHP.NET](https://www.php.net/)
- PHP es fácil de aprender y se ejecuta de manera efciente en el lado del servidor

## ¿Qué hay de nuevo en PHP 7?
- PHP 7 es mucho más rápido que la popular versión de estable anterios (PHP 5.6)
- PHP 7 he mejorado el manejo de los errores 
- PHP 7 admite declaraciones de tipo más estrictas para argumentos de función
- PHP 7 admite nuevos operadores

## ¿Qué necesito?

para comenzar a usar PHP, puede:
- Encuentre un servidor web con soporte para PHP y MySQL (Xamm)
- instale un servidor web en su propia PC y luego instale PHP y MySQL

## Use un servidor web con soporte PHP

Si su servidor tiene activado el soporte para PHP no es necesario que realice alguna acción. Simplemente cree algunos *.PHP* archivos,colóquelos en su directorio web y el servidor los analizará automáticamente.

No necesita compilar nada ni instalar ninguna herramienta adicional. Debido a que PHP es gratuito, la mayoria de los servidores web ofrecen soporte para PHP.

## Configure PHP en su propia PC 

Sin embargo, si su navegador no es compatible con PHP,debe:
- instalar un servidor web que soporte PHP
- instalar PHP
- instalar una base de datos, como MySQL

El sitio web oficial de [PHP.NET](https://www.php.net/) tiene instrucciones de instalación para PHP en su [ManualInstall]( http://php.net/manual/en/install.php). otra opción que puede usar es un compilador en línea.

## Sintaxis PHP

Se ejecuta un Script PHP en el servidor y el resultado HTML sin formato se envía de vuelta al navegador. Un Script se puede colocar en cualquier parte del documento, Un Script PHP comienza   _(<?php y termian en <?)_
~~~
<?php 
// php code goes here
?>
~~~

La extención predeterminada para los archivos PHP es ".php". Un archivo PHP normalmente contiene etiquetas HTML y algún código de secuensias de comandos PHP.

A continuación, tenemos un ejemplo de un archivo PHP simple, con un script PHP que utiliza una función PHP integrada "Echo" para generar el texto "Hello World!" en una páguina web:
~~~
<!DOCTYPE htmo>
<hmtl>
  <body>
    <h1> My first PHP page<h1>
     
      <?php 
          Echo "Hello World!";
      ?>
      
  </body>      
</html>
~~~
Note: _las declaciones en PHP deben de terminar en ;._
    
## Sencibilidad de mayúsculas y minúsculas de PHP 
    
En, PHP, las palabras clave (P.ej:if, else, while, echo etc...), clases, funciones y funciones definidas por le usuario no distiguen entre mayúsculas y minúsculas.
    
En la siguiente ejemplo, las tres declaraciones de Echo son igules y legales:
 ~~~
    <!DOCTYPE html>
    <html>
      <body>
        
        <?php 
        ECHO "Hello Wordl!<br>";
        echo "Hello Wordl!<br>"
        EcHo "Hello Wordl!<br>"
        ?>
        
      </body>
    </html>
 ~~~
    
Nota: _Sin embargo; ¡Todos los nombres de las variables distinguen entre mayúsculas y minúsculas!_ 
    
Para mejor explicación haremos un ejemplo más, a continuación; ¡solo la primera declaración mostrará el valor de la variable $color!, esto se de a que $color, $coLOR y $COLOR se tratan de tres variables distintas o diferentes.

~~~
    <!DOCTYPE html>
    <html>
      <doby>
        
        <?hp
        $color = "red";
        Echo "My car is ". $color. "<br>";
        Echo "My car is ". $coLOR. "<br>";
        Echo "My car is ". $COLOR. "<br>";
        ?>

    </body>
  </html>      
~~~

## Comentarios en PHP 

Un comentario en código PHP es una línea que no se ejecuta como parte del programa. Su único propósito es que alguien que esté mirando el código la lea.
    
Los comentarios se puede utilizar para:
    
- Deje que otros usuarios puedan entender su código
- Recuerde que lo hizo
- Los comentarios puden recordarte lo que estabas pensando cuando esribiste el código

PHP nos permite varias formas de comentar:

_Ejemplo:_

Sintaxis para comentarios de una sola línea:

~~~
<!DOCTYPE html>
    <html>
      <body>
        
        <?php
      //This is a single-line comment

      #This is a single-line comment
~~~

_Ejemplo:_

Sintaxis para comentarios de varias líneas:

~~~
<!DOCTYPE html>
<html>
  <body>

    <?php
  /*
  This is a multiple-lines comment block
  that spans over multiple
  lines
  */
    ?>
        
</html>
</body>      
~~~

Nota: _los comentarios también nos permite omitir partes de códigos:
    
~~~
<!DOCTYPTE html>
<html>
  <body>
    
    <?php 
  //You can also use comments to leave out parts of a code line
$x =/* +15*/ + 5;
  
  Echo: $x;
    ?
  
  </body>
</html>
~~~  

Si quiere ver mas ejemplos puede visitar el: [Material de apoyo](https://github.com/Brayan-Hc11/PHP/blob/main/EjerciciosPHP/CAP4.PHP)

## Variables en PHP

Se puede decir que las variables en programación son "contenedores" los cuales nos permiten almacenar información.

## Creación o declaración de variables en PHP 

En PHP, una variable comienza con el signo $, seguido el nombre de la variable:

_Ejemplo:_
~~~
<?php
$text "Hello world!";
$x = 5;
$y =15.5; 

  Echo $text."<br>";
  Echo $x. "<br>";
  Echo $y. "<br>";
?>
~~~


[infografia](https://www.w3schools.com/php/php_intro.asp)
    
[infografia](https://www.php.net/manual/es/tutorial.php)
