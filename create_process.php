<?php
require_once 'config.php'; // Incluye el archivo de configuración

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Realizar la inserción en la base de datos
    $consulta = "INSERT INTO tabla (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar al index.php después de guardar los datos
        header('Location: index.php');
        exit();
    } else {
        echo "Error al insertar los datos: " . mysqli_error($conexion);
        exit();
    }
}
?>
