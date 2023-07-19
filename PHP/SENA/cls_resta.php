<?php
#inciamos la clase de global de operaciones
class Operaciones {
    #inicioamos la funcion
    public function restar($dato1, $dato2){
        #variobles de operaciones
        $resultado = $dato1 - $dato2;
            print("El resultado final es: ");
            print($resultado."<br/>");
    }
}

#variables finales 
$final = new Operaciones();
    $final ->restar ($_POST['dato1'], $_POST['dato2']);

    Echo("<a href='index.php'>volver al menú principal</a>");
?>