<?php include('conexion.php');

$departamento = $_POST['nombre_departamento'] ?? null;

if ($departamento) {
    // Consulta preparada para insertar 
    $sql_d2 = "INSERT INTO departamentos(id_departamento, departamento) VALUES(?, ?)";
    $stmt = mysqli_prepare($db, $sql_d2);
    mysqli_stmt_bind_param($stmt, 's', $departamento);
    $res_d2 = mysqli_stmt_execute($stmt);

    if ($res_d2) {
        echo "
        <script>
            alert('El departamento se ha añadido correctamente');
            window.location.href = 'index.php';
        </script>";
        exit(); 
    } else {
        echo "
        <script>
            alert('El departamento no se ha podido añadir ');
            window.location.href = 'index.php';
        </script>";
    }
    mysqli_stmt_close($stmt);
} else {
   echo("ddd");
}
mysqli_close($db);
?>