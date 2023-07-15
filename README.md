<div align="center">
  <img align="center" src="https://github.com/Thomas-Boi/devicon/blob/master/icons/php/php-original.svg" height ="100px"/>
  
  # Ruta de aprendizaje PHP 
</div>

<details>
  <summary>
    Inicio en PHP 
  </summary>

***
Antes de continuar se debe de tener una compresión bácica de lo siguiente:
- [HTML](https://github.com/Brayan-Hc11/HTML5)
- [CSS](https://github.com/Brayan-Hc11/css3)
- [JavaScript](https://github.com/Brayan-Hc11/JavaScript)

Si desea aprender algunos de estos temas, pude revisar algunos de mis repositorios en donde podrá encontrar lo fundamental del desarrollo web  
***
</details>

<details>
  <summary>
    Introducción a PHP
  </summary>

  ***
## ¿Qué es PHP?
PHP es un lenguaje sorprendete y pupular, PHP es lo suficientemente potente para ser el núcleo del sistema de blogs más grande de la web [WorPress](https://cloud.google.com/wordpress?utm_source=bing&utm_medium=cpc&utm_campaign=latam-CO-all-es-dr-SKWS-all-all-trial-p-dr-1009897-LUAC0016538&utm_content=text-ad-none-any-DEV_c-CRE_-ADGP_Hybrid%20%7C%20SKWS%20-%20MIX%20%7C%20Txt%20~%20Compute_Wordpress-KWID_43700067399687799-kwd-78203120058646%3Aloc-43&utm_term=KW_Wordpress-ST_Wordpress&gclid=f1719b1327d811e05b3eff6140fd1983&gclsrc=3p.ds&hl=es), PHP también es lo suficientemente profundo como para poder ejecutar grandes redes sociales y es bastante facil de aprender como para ser el primer lenguaje del  lado del servidor para un principiante 

- PHP es un acrónimo de "PHP: Procesador de Hipertexto"
- PHP es un lenguaje de secuencias de código abierto ampliamente utilizado
- Los Scripts de PHP se ejecutan del lado del servidor  

***
## ¿Qué es un archivo PHP?

Los archivos PHP pueden contener texto, HTML, CSS, JavaScript y código PHP. El código PHP se ejecuta en el servidor y el resultado se devuelve al navegador como HTML simple, los archivos PHP tienen la extención _".PHP"_
***

## ¿Qué puede hacer PHP?
- PHP puede generar contenido de página dinámico
- PHP puede crear, abir, leer, escribir, eliminar y cerrar archivos en el servidor
- PHP puede recopilar datos de formulario
- PHP puede enviar y recibir cookies
- PHP puede agregrar, eliminar, modificar datos en base de datos
- PHP se puede usar para controlar el acceso de los usuarios  

Con PHP no está limitado a generar HTML. puede generar imágenes o archivos PDF. También puede generar cualquier texto, como [XHTML](https://books.google.cl/books?hl=es&lr=&id=aaa6EAAAQBAJ&oi=fnd&pg=PA1&dq=Que+es+XHTML+&ots=dpvIvfdlm6&sig=jLY4kEWVofozaOsoWCCt_SFvlDg#v=onepage&q=Que%20es%20XHTML&f=false) y [XMl](https://www.google.com.co/books/edition/XML_pr%C3%A1ctico/x6QToh9wHMYC?hl=es&gbpv=1&dq=Que+es+XML&printsec=frontcover).

***
## ¿Por qué PHP?
- PHP se ejecuta en varias platatoformas _(Windows, Linux, Unix, Mac Os x, etc...)_
- PHP soporta una amplia gama de base de datos
- PHP es gratis, y puedes descargarlo en [PHP.NET](https://www.php.net/)
- PHP es fácil de aprender y se ejecuta de manera eficiente en el lado del servidor

***
## ¿Qué hay de nuevo en PHP 7?
- PHP 7 es mucho más rápido que la popular versión estable anterior (PHP 5.6)
- PHP 7 he mejorado el manejo de los errores 
- PHP 7 admite declaraciones de tipo más estrictas para argumentos de función
- PHP 7 admite nuevos operadores

***
</details>

<details>
  <summary>
    Inslación y configuración de PHP
  </summary>

  ***  
## ¿Qué necesito?
para comenzar a usar PHP, puede:
- Encuentre un servidor web con soporte para PHP y MySQL (Xamm)
- instale un servidor web en su propia PC y luego instale PHP y MySQL

***
## Use un servidor web con soporte PHP

Si su servidor tiene activado el soporte para PHP no es necesario que realice alguna acción. Simplemente cree algunos *.PHP* archivos,colóquelos en su directorio web y el servidor los analizará automáticamente.

No necesita compilar nada ni instalar ninguna herramienta adicional. Debido a que PHP es gratuito, la mayoria de los servidores web ofrecen soporte para PHP.

***
## Configure PHP en su propia PC 
Sin embargo, si su navegador no es compatible con PHP,debe:
- instalar un servidor web que soporte PHP
- instalar PHP
- instalar una base de datos, como MySQL

El sitio web oficial de [PHP.NET](https://www.php.net/) tiene instrucciones de instalación para PHP en su [ManualInstall]( http://php.net/manual/en/install.php). otra opción que puede usar es un compilador en línea.

***
</details>

<details>
  <summary>
    Sintaxis en PHP
  </summary>

***
## Sintaxis PHP
Se ejecuta un Script PHP en el servidor y el resultado HTML sin formato se envía de vuelta al navegador. Un Script se puede colocar en cualquier parte del documento, Un Script PHP comienza con la etiqueta de apertura y finaliza con una etiqueta de cierre.

_Ejemplo:_
~~~
<?php 

  // php code goes here

?>
~~~
La extención predeterminada para los archivos PHP es ".php". Un archivo PHP normalmente contiene etiquetas HTML y algún código de secuensias de comandos PHP.

A continuación, tenemos un ejemplo de un archivo PHP simple, con un script PHP que utiliza una función PHP integrada "Echo" para generar el texto "Hello World!" en una páguina web:
~~~
<!DOCTYPE html>
<hmtl>
  <body>
    <h1> My first PHP page<h1>
     
      <?php 
          Echo "Hello World!";
      ?>
      
  </body>      
</html>
~~~
Note: _las declaraciones en PHP deben de terminar en ;._

***
## Sencibilidad de mayúsculas y minúsculas de PHP 
En, PHP, las palabras clave (P.ej:if, else, while, echo etc...), clases, funciones y funciones definidas por el usuario no distiguen entre mayúsculas y minúsculas.
    
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

***  
</details>

<details>
  <summary>
    Comentarios en PHP
  </summary>

***
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
        ?>
      </body>
     </hmtl>
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

Nota: _los comentarios también nos permite omitir partes de códigos:_
    
~~~
<!DOCTYPTE html>
<html>
  <body>
    
    <?php 
  //You can also use comments to leave out parts of a code line
$x =5 /*+15*/ + 5;
  
  Echo: $x;
    ?>
  
  </body>
</html>
~~~  

Si quiere ver mas ejemplos puede visitar el: [Material de apoyo](https://github.com/Brayan-Hc11/PHP/blob/main/EjerciciosPHP/CAP4.PHP)

***
</details>

<details>
  <summary>
    Variables en PHP
  </summary>

  ***
## Variables en PHP
Se puede decir que las variables en programación son "contenedores" los cuales nos permiten almacenar información.

***
## Creación o declaración de variables en PHP 

En PHP, una variable comienza con el signo $, seguido el nombre de la variable:

_Ejemplo:_
~~~
<?php
$text "Hello world!";
$x = 5;
$y = 15.5; 

  Echo $text."<br>";
  Echo $x. "<br>";
  Echo $y. "<br>";
?>
~~~

Después de la ejecución de la instrucciones anteriores, la variable $txt contendrá el valor de Hello world!, la variable $x contendrá el valor de 5 y la variable $y contendrá el valor de 15.5.

Nota: _Cuando asigne un valor de texto a una variable, coloque comillas alrededor del valor._

Nota: _a diferencia  de otros lenguajes de programación,PHP no tiene ningún comando para declarar una variable. Se crea en el momento en que le asigna un valor por primera vez._

***
## Variables PHP     
Una variable puede tener un nombre corto (como x e y) o un nombre más descriptivo (edad, nombre del coche, volumen_total, etc..).
    
Reglas para declarar variables en PHP
- Una variable comienza con el signo $, seguido del nombre de la variable
- Un nombre de variable debe comenzar con una letra o el carácter de subrayado
- Un nombre de variable no pude comenzar con un número
- Un nombre de variable solo puede contener caracteres alfanuméricos y guiones bajos (Az, 0-9 y _)
- Los nombre de las variables distinguen entre mayúsculas y minúsculas ($age y $AGE son dos variables diferentes)

Nota: _¡Recuerde que los nombres de las variables de PHP distinguen entre mayúsculas y minúsculas!_

***
## Variables de salida 

La echo declaración de PHP se usa a menudo para enviar datos a la pantalla.
    
El siguiente ejemplo mostrará cómo generar texto y una variable:

_Ejemplo;_
~~~
    <?php

    $txt = "W3Schools.com";
      Echo "I love $txt!";
    
    ?>
~~~
    
El siguiente ejemplo producirá el mismo resultado que el ejemplo anterior, con la direfencia de que usaremos la concatenación:

_Ejemplo;_
~~~
    <?php

    $txt = "W3Schools.com";
      Echo "I love". $txt."!";

    ?>
~~~

El siguiente ejemplo generará la suma de dos variables de dos formas distintas:

_Ejemplo:_
~~~
    <?php 
  
  $x = 5;
  $y = 4;
    Echo $x + $y;
    
    ?>
~~~

El siguiente ejemplo producirá el mismo resultado que el ejemplo anterior, con la diferencia de que declararemos una variable adicional, en la que se almacenara la opercón a realizar:

_Ejemplo:_
~~~
    <?php 

  $x = 5;
  $y = 5;
  $resultado = $x + $y;
    Echo $resulatado;

      ?>
~~~
Nota: _Aprenderá más sobre la echo declaración y cómo enviar datos a la pantalla más adelante._ 

## PHP es un lenguaje escrito libremente

En el ejmplo anterior, observe que no tuvimos que decirle a PHP qué tipo de datos se almacenarón en las variables.

PHP asocia autimáticamente un tipo de dato a la variable, dependiendo de su valor. Dado que los tipos de datos no se establecen en un sentido estricto, puede hacer cosas como agregar una cadena a un número entero sin causar un error.

En PHP 7, se agregaron declaraciones de tipo. Esto brinda una opción para especificar el tipo esperado al declarar una función, y al habilitar el requisito estricto, arrojará un "Error fatal" en una falta de coincidencia de tipo.

Aprenderá más sobre Strict los non-Strict requisitos y las declaraciones de tipos de datos en el apartado de funciones de PHP.

***
## Alcance de las variables de PHP

En PHP, las variables se puede declarar en cualquier parte del Script. 

El alcance de un variable es la parte del Script donde se puede hacer referencia/utilizar la variable.

PHP tiene tres ámbitos variables diferentes:
- Local
- Global
- Estático

## Alcance Global y Local

Una variable declarada fuera de una función tiene un ALCANCE GLOBAL y solo se puede acceder fuera de una función:

_Ejmeplo:_

variable con alcance global
~~~
<?php
$x = 5; // global scope

function Mytest(){
  //Using x inside this function will generate an error
    Echo "<p>Variable x intside function is: $x</p>";
}

  Mytest();
    Echo "<p>Variable x outside function is: $x</p>";
?>
~~~

Una variable declarada dentro de una función tiene un ÁMBITO LOCAL y solo se puede acceder dentro de esa función:

_Ejmplo:_

Variable con alcance local:
~~~
<?php
  function Mytest(){
  $x =5; //local scope
    Echo "<p>Variable x inside function is: $x</p>";
}

Mytest();
//Using x outside the function will generate an error
  Echo "<p>Variable x outside function is: $x</p>";

?>
~~~

Nota: _Puede tener variables locales con el mismo nombre en diferentes funciones, porque las variables locales solo son reconocidas por la función en la que se declaran._

***
## PHP La palabra clave global

La palabra clave global se utiliza para acceder a una variable global desde dentro de una función.

Para hacer esto , se usa la palabra clave global andes de las variables (dentro de una función):

_EJmplo:_
~~~
<?php

$x = 5;
$y = 10;

  function Mytest(){
    global $x,$y;
      $y = $x + $y;
  }
 
 Mytest();
  Echo $y; #outpus 15 
?>
~~~

PHP también almacena todas las variables globales es un matriz llamada. contiene el nombre de la variable. También se puede acceder a esta matriz desde dentro de las funciónes y se puede usar para actualizar variables globales directamente. $GLOBALS[index] index

El ejemplo anterior se puede reescribir de la siguiente manera:

_Ejemplo:_
~~~
<?php
  
  $x = 5;
  $y = 10;
  
    function Mytest(){
      $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    Mytest();
      Echo $y; // 15
?>
~~~

***
## PHP La palabra clave static 

Normalmente, cuando se completa/ejecuta una función,se eliminan todas sus variables.Sin embargo, aveces queremos que NO se elimine una variable local. lo necesitamos para otro trabajo.

para hacer esto, ues la palabra clase "static" cuando declara la variable por primera vez:

_Ejmplo:_ 
~~~
<?php
function Mytest(){
  static $x = 0;
    Echo = $x;
    $x++;
};

Mytest();
  Echo "<br>";
Mytest();
  Echo "<br>";
Mytest();
  Echo "<br>";
?>
~~~

Entonces, cada vez que se llame a la función, esa variable aún tendrá la información que contenía desde la última vez que se llamó a la función.

Nota: _la variable sigue siendo local para la función._

***  
</details>

<details>
  <summary>
    Declaración de Echo y Print en PHP
  </summary>

  ***
  
## Declaraciones Echo y Print en PHP 

Con PHP, hay dos formas básicas de obtener resultados: echo y print.

En este tutorial estaremos usando *echo* y *print* en la mayoría de los ejemplos. Entoces esté cpitulo tiene un poco más de información sobre esas dos declaraciones de salida.

echo y print son mas o menos lo mismo.Ambos se utilizan para enviar datos a la pantalla.

Las diferencias son pequeñas: echo no tiene valor de retorno mientras que print tiene un valor de retorno de 1 por lo que puede usarse en expreciones. echo puede tomas múltiples parámetros (aun que tal uso es raro) mientras que print puede tomar un argumento. echo es marginalmente más rápido que print.

***
## La declaración de echo de PHP

La declaración de echo la podemos usar con los parentesis o sin ellos. El siguiente ejemplo muestra comó generar texto con el comando de "echo"
 _Ejemplo:_
 
 ~~~
<?php
  Echo "<h2>PHP is Fun!</h2>";
  Echo "Hello world!<br>";
  Echo "I'm about to learn PHP!<br>";
  Echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>
 ~~~
 
 En el siguiente ejemplo muestra comó generar texto y variables con la declaración de echo:
 _Ejmplo_;
 
 ~~~
 <?php
  $txt1 = "Learn PHP";
  $txt2 = "W3Schools.com";
  $x = 5;
  $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y;
 ?>
 ~~~
 
 ***
 ## La declaración print dentro de PHP
 
 La declaración print se puede usar con parentesis o sin ellos, En el sigiuiente ejemplo muestra comó generar texto con el comando print
 _Ejemplo:_
 
 ~~~
 <?php
  print "<h2>PHP is Fun!</h2>";
  print "Hello world!<br>";
  print "I'm about to learn PHP!";
 ?>
 ~~~
 
 En el siguiente ejemplo muestra comó generar testo y variables con la declaración print
 _Ejmplo:_
 
 ~~~
 <?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?>
 ~~~

***
</details>

<details>
  <summary>
    Tipos de datos en PHP
  </summary>

  ***
  ## Tipos de datos en PHP

Las variables pueden almacenar datos de diferentes tipos, y diferentes tipos datos pueden hacer cosas diferentes.

PHP admite los siguientes tipos de datos:
- Cadena
- Entero
- Flot (número de coma flotante, también llamados dobles)
- Booleano
- Formación (Matricez)
- Objeto 
- Nulo 
- Recurso

## Cadena en PHP

Una cadena es una secuencia de caracteres, como "¡Hola mundo!".

Una cadena puede ser cualquier texto entre comillas.Puede utilizar comillas simples o dobles:

_Ejemplo:_
~~~
<?PHP

  $x = "¡Hello world!";
  $y = '¡Hello World!';

    Echo $x;
    ECho "<br>";
    Echo $y;
?>
~~~

## Entero en PHP

Un tipo de dato entero es un número no decimal entre  -2,147,483,648 y 2,147,483,647.

Reglas para los números enteros: 
- Un número entero debe tener al menos un dígito
- Un número entero no debe de tener un punto decimal
- Un número entero puede ser negativo o positivo
- Los números enteros se puede especificar en: notación decimal(base 10),hexadecimal (base 16),octal (base 8) o binaria (base 2)

En el siguiente ejemplo, $x es un número entero. La función PHP var_dump() devuelve el tipo de dato y el valor:

_Ejemplo:_
~~~
<?php

$x = 5985;
  var_dump($x);
  
?>
~~~

## Flot(Flotante)

Un Float (número de punto flotante ) es un número con un punto decimal o un número en forma exponencial.

En el siguiente ejemplo, $x es un flotante. La función PHP **var_dump()** devuelde el tipo de dato y el valor:

_Ejemplo:_
~~~
<?PHP

  $x = 10.365;
    var_dump($x);
?>
~~~

## PHP booleano 

Un booleano representa dos estados posibles: TRUE(Verdadero) y FALSE(Falso). Los booleanos se utilizan a menudo en pruebas condicionales.

~~~
<?php
$x = True;
$y = False;
?>
~~~

## Formación(Matricez)

Una matriz almacena múltiples valores en un sola variable.

En el siguiente ejemplo, $cars es una matriz. La función PHP var_dump(); devuele el tipo de datos y el valor:

_Ejemplo:_

~~~
<?PHP

  $cars = arary("Volvo","BMW","Toyota");
    var_dump($cars);
    
?>
~~~

*** 
## Objeto en PHP 

Las calses y los objetos son los dos aspectos principales de la programación orientada a objetos.

Una clase es una plantilla para objetos y un objeto es una instancia de una clase.

Cuando se crean los objetos individuales, heredan todas las propiedades y comportamientos de la clase, pero cada objeto tendrá diferentes valores para las propiedades.

Supongamos que tenemos una clase llamada Car. Un automóvil puede tener propiedades como modelo, color, etc. Podemos definir variables como $modelo, $color, etc., para contener los valores de estas propiedades.

Cuando se crean los objetos individuales(Volvo, BMW, Toyota, etc.), heredan todas las propiedades y comportamientos de la clase, pero cada objeto tendrá diferentes valores para las propiedades.

Si crea una función "construct()", PHP llamará automáticamente a esta función cuando cree un objeto de una clase.

_Ejemplo:_

~~~
<?PHP
class Car {

  public $color;
  public $model;
  public function _construct($color,$model) {
    
    $this -> color = $color;
    $this -> model = $model;
  }
  
  public function message(){
    return "My car is a " . $this -> color. " " . $this -> model. "!";  
  }
}

$myCar = new Car("black", "Volvo")
  
  Echo $myCar -> message();
  Echo "<br>";

$myCar = new Car("red", "Toyota");
  Echo $myCar -> message();
?>
~~~

***
## Valor NULO de PHP

Null es un tipo de dato especial qeu solo puede tener un valor: NULL. 

Una variable de tipo de datos NULL es una variable que no tiene ningún valor adignado.

**Sugerencia:** si se crea una variable sin un valor, se le asigna automáticamente un valor NULL.

Las variables también se puede vaciar estableciendo el valor en NULL:

_Ejemplo:_

~~~
<?PHP
$x = "¡Hello world!";
$x = null;

  var_dump($x);
?>
~~~

***
## Recurso PHP
El tipo de dato Recurso especial no es un tipo de datos real. Es el alamacenamiento de una referencia a funciones y recursos externos a PHP.
Un ejemplo común del uso de tipo de dato de recurso es una llamada a la basse de datos.
No hablamos aquí del tipo de recurso, ya que es un tema avanzado.

***
</details>

<details>
  <summary>
    Cadenas o strings en PHP
  </summary>

  ***
## Cadenas en PHP
Una cadena en PHP es una secuencia de caracteres , como lo es "¡Hola mundo!".

***
## Funciones de cadenas de PHP
En es ta capítulo veremos las funciones de cadenas compún para manipular cadenas.

#### Strlen() - Devuelve la longitud de una cadena 
La función PHP "Strlen()" devuelve la longitud de una cadena.

_Ejemplo:_
~~~
<?php
  Echo Strlen("¡Hello World!");//outputs 12
?>
~~~

#### Str_Word_count() Cuenta cada una de las palabras 
La función de PHP Str_Word_Count() Cuenta el número de palabras que se encuentra en una cadena de caracteres.

_Ejemplo:_
~~~
<?php
  Echo Str_Word_count("¡Hello World!");//outputs 2
?>
~~~

#### Strrev () Invierte la cadena
La función PHP Strrev() invierte una cadena 

_Ejemplo:_
~~~
<?php
  Echo Strrev("¡Hello World!");//outputs "!dlroW olleH¡"
?>
~~~

#### Strpos()- Buscar un texto en una cadena de texto
Lafunción Strpos() en PHP busca un texto específico dentro de una cadena. Si se encuentra coincidencia, lafunción devuelve el la prosición del carácter de la primera coincidencia. si no se encuentra ninguna coincidencia devolverá FALSO.

_Ejemplo:_
Busque el texto "Mundo" en la cadena "!Hola mundo¡":

~~~
<?php
  Echo Strpo("!Hello Word¡", "World");//outputs 7
?>
~~~
_Nota:_ La posición del primer carácter en una cadeena es 0 no 1.

#### Str_replace()- Reemplazar texto dentro de una cadena
La función de Str_replace() en PHP reemplaz algunos catacteres en una cadena y se usa de la siguiente forma:

_Ejemplo:_

Reemplace el texto "mundo" con "Dolly"
 
~~~
<?php
Echo str_replace("world","Dolly","Hello word!");//outputs Hello Dolly
?>
~~~
***

</details>

<details>
  <summary>
    Números en PHP
  </summary>
  
  ***
  ### En este capítulo veremos en pronfundidad los números enteros(int), los flotantes(float) y las cadenas numéricas que se presentan en PHP.

***
## Números en PHP
Una cosa a tener en cuenta sobre PHP es que proporciona conversión automática de tipos de datos.

Entonces, si se asigna un valor entero a una variable, el tipo de esa variable será automáticamente un número entero.Luego, si asigna una cadena a la misma variable, el tipo cambiará a una cadena. 

Este tipo de conversión automatica puede llegar a romper el código.
***

## Enteros en PHP (int)
2, 256, -256, 10358, -179567,etc... son todos números enteros.

Un valor numérico entero es un número sin ninguna parta decimal.

Un tipo de dato entero es un número no decimal entre -2147483648 y 2147483647 en sistemas de 32 bits, y entre -9223372036854775808 y 9223372036854775807 en sistemas de 64 bits. Un valor mayor o menor que este, se almacenará como un valor flotante, por que este valor esta exediendo el límite de un número entero.

_Nota:_ Otra cosa importante que debe saber es que incluso si 4* 2.5 es 10, el resultado se almacena como un flotante, porque uno de los operadores es flotante(2.5).

Aquí hay algunas de las reglas para nuúmeros enteros:
 - Un número entero(int) debe de tener al menos un dígito
 - Un número entero(int) __NO__ debe de tener un punto decimal
 - Un número entero(int) puede llegar a ser positivo o negativo
 - Los número enteros(int) se pueden especificar en tres formatos:
    - decimal (base en 10)
    - hexadecimal (base en 16 con prefijo de 0x)
    - octal (base 8 con prefijo de 0)

PHP tiene las siguientes constates predefinidas para números enteros:
  - PHP_INT_MAX: nos permitirá usar el entero más grande admitido
  - PHP_INT_MIN: nos permitirá usarl el entero más pequeño admitido
  - PHP_INT_SIZE: nos describe el tamaño de un entero en bytes

PHP tiene las siguietes fundiones para verificar si el tipo de una variable es entero:
  - es_int()
  - is_integer()
  - is_long()-alias de is_int()

_Ejemplo:_

Compruebe si el tipo de una variable es entero:
~~~
<!DOCTYPE html>
  <html>
    <body>

<?php
// Check if the type of a variable is integer   
  $x = 5985;
    var_dump(is_int($x));//outpus bool(true)

      Echo "<br>";

// Check again... 
  $y = 59.85;
    var_dump(is_int($y));//outpus bool(false)
?>  

</body>
</html>
~~~
***

## Flotantes en PHP(Float)
Un número flotante o float es un número con un punto decimal o un número de forma exponencial.

2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 son todas flotantes.

El tipo de datos flotantes normalmete puede almacenar un valor de hasta 1,7976931348623E+308 (depende de la plataforma) y tener una precisión máxima de 14 dígitos.

PHP tiene las siguientes constantes predefinidas para flotantes(desde PHP v.7.2):
  - PHP_FLOAT_MAX: nos permite usar el número flotante mas grande admitido
  - PHP_FLOAT_MIN: nos permite usar el número flotante mas pequeño admitido
  - PHP_FLOAT_DIG: la cantidad de dígitos decimales que se pueden redondear a un flotante y viceversa sin pérdida de precisión
  - PHP_FLOAT_EPSILON-El número positivo represntable más peequeño x, de modo que x + 1.0 ! = 1.0

PHP tiene las siguientes funciones para verifica si el tipo de una variable es flotante:
  - es_flotante()
  - is_double()- alias de is_float()

_Ejemplo:_ 

Compruebe si el tipo de una variable es flotante:
~~~
<!DOCTYPE html>
  <html>
    <body>

<?php
// Check if the type of a variable is float 
  $x = 10.365;
    var_dump(is_float($x));//outpus bool(true)

Echo "<br>"

//check again..
  $y = 10000;
    var_dump(is_float($y));//outpus bool(false)

?>  

</body>
</html>
~~~

</details>

<details>
  <summary>
    Matematicas en PHP
  </summary>
</details>

<details>
  <summary>
    Constantes en PHP
  </summary>
</details>

<details>
  <summary>
    Operadores en PHP
  </summary>
</details>

<details>
  <summary>
    Condicionales en PHP
  </summary>
</details>

<details>
  <summary>
    Cambio en PHP
  </summary>
</details>

<details>
  <summary>
    Bucles en PHP
  </summary>
</details>

<details>
  <summary>
    Fundiones en PHP
  </summary>
</details>

<details>
  <summary>
    Matrices en PHP
  </summary>
</details>

<details>
  <summary>
    Superglobales en PHP
  </summary>
</details>

<details>
  <summary>
    Expreción regular en PHP
  </summary>
</details>

























































































































































































































   
   
   
   
   
   
        
<!--[practica de PHP](https://www.w3sch
    
[Documentación PHP](https://www.php.net/manual/es/tutorial.php)-->
