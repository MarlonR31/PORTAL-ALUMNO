<?php
// Datos del perfil
$nombre = "Stiven"; // Cambia esto por tu nombre
$edad = 25; // Cambia esto por tu edad
$descripcion = "Soy un entusiasta de la programación y me gusta aprender sobre nuevas tecnologías."; // Cambia esto por tu descripción
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de <?php echo $nombre; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .perfil {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="perfil">
    <h1>Perfil de <?php echo $nombre; ?></h1>
    <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
    <p><strong>Descripción:</strong> <?php echo $descripcion; ?></p>
</div>

</body>
</html>