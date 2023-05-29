<?php
$hostname = 'localhost'; // Cambia esto si tu servidor de base de datos está en otro host
$username = 'root'; // Reemplaza con tu nombre de usuario de MySQL
$password = 'byjoel123'; // Reemplaza con tu contraseña de MySQL
$database = 'nombre_basedatos'; // Reemplaza con el nombre de tu base de datos

// Crear la conexión a la base de datos
$conexion = mysqli_connect($hostname, $username, $password, $database);

// Verificar si hay errores de conexión
if (mysqli_connect_errno()) {
    echo "Error de conexión a la base de datos: " . mysqli_connect_error();
    exit();
}
?>
