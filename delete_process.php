<?php
require_once 'config.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Eliminar el registro de la base de datos
    $sql = "DELETE FROM tabla WHERE id = $id";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        mysqli_close($conexion);
        header('Location: index.php?delete=success');
        exit;
    } else {
        echo 'Error al eliminar el registro: ' . mysqli_error($conexion);
    }
} else {
    echo 'ID de registro no proporcionado.';
}

mysqli_close($conexion);
?>
