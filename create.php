<!DOCTYPE html>
<html>
<head>
    <title>Agregar Registro</title>
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
    }

    .card form label {
        margin-bottom: 10px;
    }

    .card form input[type="text"],
    .card form input[type="email"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
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
    
    <div class="card">
        <h1>Agregar Registro</h1>

        <form action="create_process.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required><br>


            <div class="button-container">
                <input type="submit" value="Agregar">
                <input class="close-button" type="submit" value="Cerrar" onclick="window.location.href='index.php'">
            </div>
            
        </form>
    </div>

</body>
</html>
