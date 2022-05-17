<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 04</title>
    <link rel="stylesheet" href="Lab_05_E1.css">
</head>
<body>
    <div class="contenedor">
        <h1>Mostrar usuario</h1>
        <?php
        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $email = $_GET["email"];
        
        echo "<p>";
        echo "Bienvenido" . $nombre . $apellido . "Su correo electrónico es " . $email;
        echo "<p>";
        ?>
    </div>
</body>
</html>
