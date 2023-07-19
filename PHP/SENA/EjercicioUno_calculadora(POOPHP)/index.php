<?php
#iniciamos con la interrcción con el usuario 
Define("Saludo","<h2>Bienvenido a nuestro sistema de calculadora</h2>"."\n");
    Echo(Saludo);

    #apartado de redireccionamiento
    Define("redireccionamiento","Por favor ingrese al link de la operación que desea ejecutar en nuestra calculadora:"."<br/>");
        Echo(redireccionamiento);

    #listado de direcciones
    Echo("1). Desea realizar una " ."<a href='for_suma.php'>suma</a>"."<br/>");
    Echo("2). Desea realizar una " ."<a href='for_resta.php'>resta</a>"."<br/>");
    Echo("3). Desea realizar una " ."<a href='for_divición.php'>divición</a>"."<br/>");
    Echo("4). Desea realizar una " ."<a href='for_multiplicación.php'>multiplicación</a>"."<br/>");
?>