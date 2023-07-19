<?php
#inciamos la clase de global de operaciones
class Operaciones {
    #inicioamos la funcion
    public function multiplicar($dato1, $dato2){
        #variobles de operaciones
        $resultado = $dato1 * $dato2;
            print("El resultado final es: ");
            print($resultado."<br/>");
    }
}

#variables finales 
$final = new Operaciones();
    $final ->multiplicar ($_POST['dato1'], $_POST['dato2']);

    Echo("<a href='index.php'>volver al menú principal</a>");
?>