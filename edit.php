<!DOCTYPE html>
<html>
<head>
    <title>Editar Registro</title>
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

        .card form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .card form label {
            margin-bottom: 10px;
        }

        .card form input[type="text"],
        .card form input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .card form input[type="submit"] {
            background-color: #4CAF50;
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

        .card form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .card {
            text-align: center;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
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
    <?php
    require_once 'config.php';

    // Verificar si se ha enviado el ID del registro a editar
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Consulta SQL para obtener los datos del registro por ID
        $sql = "SELECT * FROM tabla WHERE id = $id";
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            $registro = mysqli_fetch_assoc($resultado);

            // Obtener los datos del registro
            $nombre = $registro['nombre'];
            $email = $registro['email'];
            $telefono = $registro['telefono'];
        } else {
            echo '<p>No se encontró el registro.</p>';
            exit;
        }
    } else {
        echo '<p>ID de registro no proporcionado.</p>';
        exit;
    }

    mysqli_close($conexion);
    ?>

    <div class="card">
        <h1>Editar Registro</h1>

        <form action="edit_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="<?php echo $telefono; ?>" required>

            
            <div class="button-container">
                <input type="submit" value="Guardar Cambios">
                <a href="index.php" class="close-button">Cerrar</a>
            </div>

        </form>
    </div>
</body>
