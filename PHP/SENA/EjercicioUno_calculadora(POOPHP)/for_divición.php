<?php
#inicio con el usuario
Define("Saludo","<h2>Bienvenido a nuestro sistema de calculadora</h2>"."\n");
Define("conv3","<p>Usted a seleccionado la operación divición, por favor ingrese los valores que desea operar</p>");

    #imprimimos las constantes
    Echo(Saludo);
    Echo(conv3);

    #incio de formulario
    Echo("<form name='suma' method='POST' action='cls_divición.php'>"."<br/>");
        print("Primer digito"."<input name='dato1' type='text'>"."<br/>");
        print("Segundo digito"."<input name='dato2' type='text'>"."<br/>");
             #boton de operación
             print("<input name='operaciones' type='submit' value='dividir'>"."<br/>");
    Echo("</form>");
    ?>
    