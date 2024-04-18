<?php
header("Content-Type: text/html; charset=utf-8");
// Conexión a la base de datos
$db = new mysqli('localhost', 'root', '', 'datos');
$db->set_charset("utf8mb4"); // Establecer el conjunto de caracteres a utf8mb4 para soportar emojis y caracteres especiales

// Verificar si hay errores de conexión
if ($db->connect_error) {
    die('Unable to connect to the database [' .  $db->connect_error . ']');
}
  //consulta tabla departamentos
  $sql_d = "SELECT * FROM departamentos";
  $resultado_d = mysqli_query($db,$sql_d);
  //cosulta tabla ciudades
  $sql_c = "SELECT * FROM ciudades";
  $resultado_c = mysqli_query($db,$sql_c);
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 03: Ciudades y departamentos</title>
    <!--Link a librerias de Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Link a estilos generales-->
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <!--formulario de registro para departamentos------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="container">
        <h1 class="heading-1">Registre un departemento</h1>
        <form action="tabla_departamentos_insertar.php" method="POST">
            <div class="mb-3">
              <label for="nombre_departamento" class="form-label">Departamento</label>
              <input type="text" class="form-control campo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese le nombre de un departamento">
            </div>
            <button type="submit" class="btn btn-success ">Enviar</button>
          </form>
    </div>
    <!--formulario de registro para ciudades------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="container">
        <h1 class="heading-1">Registre una ciudad</h1>
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Ciudad</label>
              <input type="text" class="form-control campo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese le nombre de la ciudad">
            </div>
            
            <div class="mb-3">
                <select class="form-select campo" aria-label="Default select example">
                    <option selected>Selecione un departamento para la ciudad</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success ">Enviar</button>
          </form>
    </div>
  

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>

            <?php    
            //consulta tabla categorias                                                
            $sql_d = $db ->query("SELECT * FROM departamentos");
            //recorremos la tabla categorias
            while($res_departamentos = $sql_d -> fetch_assoc()){?>
                <tr>
                    <td><?php echo $res_departamentos['id_departamento']?></td>
                    <td><?php echo $res_departamentos['nombre_departamento']?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>

   
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html> 