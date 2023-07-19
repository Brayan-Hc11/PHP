<?php
#inicio con el usuario
Define("Saludo","<h2>Bienvenido a nuestro sistema de calculadora</h2>"."\n");
Define("conv2","<p>Usted a seleccionado la operación resta, por favor ingrese los valores que desea operar</p>");

    #imprimimos las constantes
    Echo(Saludo);
    Echo(conv2);

    #incio de formulario
    Echo("<form name='resta' method='POST' action='cls_resta.php'>"."<br/>");
        print("Primer digito"."<input name='dato1' type='text'>"."<br/>");
        print("Segundo digito"."<input name='dato2' type='text'>"."<br/>");
             #boton de operación
             print("<input name='operaciones' type='submit' value='resta'>"."<br/>");
    Echo("</form>");
    ?>
    