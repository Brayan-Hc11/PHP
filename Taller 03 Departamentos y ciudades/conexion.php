<?php
header("Content-Type: text/html; charset=utf-8");

// Conexión a la base de datos
$db = new mysqli('localhost', 'root', '', 'datos');
$db->set_charset("utf8mb4"); // Establecer el conjunto de caracteres a utf8mb4 para soportar emojis y caracteres especiales

// Verificar si hay errores de conexión
if ($db->connect_error) {
    die('Unable to connect to the database [' .  $db->connect_error . ']');
}
?>