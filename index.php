<!DOCTYPE html>
<html>
<head>
    <title>Lista de Registros</title>
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

        .card p {
            text-align: center;
        }

        .card form {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .card form button {
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

        .card form button:hover {
            background-color: #45a049;
        }
    </style>    

</head>
<body>
    <div class="card">
        <h1>Lista de Registros</h1>

        <form action="create.php" method="GET">
            <button type="submit">Agregar Registro</button>
        </form>

        <?php
        require_once 'config.php';

        // Consulta SQL para obtener los registros existentes
        $sql = "SELECT * FROM tabla";
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            echo '<table>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Nombre</th>';
            echo '<th>Email</th>';
            echo '<th>Teléfono</th>';
            echo '</tr>';

            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';
                echo '<td>'.$fila['id'].'</td>';
                echo '<td>'.$fila['nombre'].'</td>';
                echo '<td>'.$fila['email'].'</td>';
                echo '<td>'.$fila['telefono'].'</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo '<p>No hay registros encontrados.</p>';
            
        }

        mysqli_close($conexion);
        ?>
    </div>
</body>
</html>


<!-- Agregar enlace o botón para acceder a create.php -->
