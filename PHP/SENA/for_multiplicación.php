<?php
#inicio con el usuario
Define("Saludo","<h2>Bienvenido a nuestro sistema de calculadora</h2>"."\n");
Define("conv4","<p>Usted a seleccionado la operación multiplición, por favor ingrese los valores que desea operar</p>");

    #imprimimos las constantes
    Echo(Saludo);
    Echo(conv4);

    #incio de formulario
    Echo("<form name='suma' method='POST' action='cls_multiplicación.php'>"."<br/>");
        print("Primer digito"."<input name='dato1' type='text'>"."<br/>");
        print("Segundo digito"."<input name='dato2' type='text'>"."<br/>");
             #boton de operación
             print("<input name='operaciones' type='submit' value='multiplicar'>"."<br/>");
    Echo("</form>");
    ?>