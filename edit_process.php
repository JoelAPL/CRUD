<?php
require_once 'config.php';

// Verificar si se ha enviado el ID del registro a editar
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Obtener los datos enviados desde el formulario de edición
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Actualizar el registro en la base de datos
    $sql = "UPDATE tabla SET nombre = '$nombre', email = '$email', telefono = '$telefono' WHERE id = $id";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        mysqli_close($conexion);
        header('Location: index.php');
        exit;
    } else {
        echo 'Error al actualizar el registro: ' . mysqli_error($conexion);
    }
} else {
    echo 'ID de registro no proporcionado.';
}

mysqli_close($conexion);
?>

