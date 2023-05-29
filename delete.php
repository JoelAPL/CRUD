<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del registro antes de eliminarlo (opcional)
    $sql = "SELECT * FROM tabla WHERE id = $id";
    $resultado = mysqli_query($conexion, $sql);
    $registro = mysqli_fetch_assoc($resultado);

    // Verificar si el registro existe
    if (!$registro) {
        echo 'Registro no encontrado.';
        exit;
    }
} else {
    echo 'ID de registro no proporcionado.';
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Registro</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .card h1 {
            text-align: center;
        }

        .card p {
            text-align: center;
        }

        .card table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        .card th,
        .card td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .card form {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .card form button {
            background-color: #FF0000;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .card form button:hover {
            background-color: #CC0000;
        }

        .card form a {
            margin-left: 10px;
            text-decoration: none;
            color: #4CAF50;
        }

        .button-container input[type="submit"] {
            margin: 0 5px;
        }

        .card form .close-button {
            background-color: #000 !important;
            color: #fff !important;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .card form .close-button:hover {
            background-color: #333 !important;
        }

    </style>
</head>
<body>
    <div class="card">
        <h1>Eliminar Registro</h1>

        <p>¿Estás seguro de que deseas eliminar el siguiente registro?</p>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
            </tr>
            <tr>
                <td><?php echo $registro['id']; ?></td>
                <td><?php echo $registro['nombre']; ?></td>
                <td><?php echo $registro['email']; ?></td>
                <td><?php echo $registro['telefono']; ?></td>
            </tr>
        </table>

        <form action="delete_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" name="confirmar">Si, Eliminar</button>
            <a type="submit" class="close-button" href="index.php">Cancelar</a>
        </form>
    </div>
</body>
</html>
