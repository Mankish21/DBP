<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 04</title>
    <link rel="stylesheet" href="Lab_05_E1.css">
</head>
<body>
    <div class="contenedor">
        <h1>Formulario de registro</h1>
        <form action="Lab_05_E1_php.php" method="get"> 
            <div class="relleno">
                <input class="campos" id="nombre" type="text" placeholder="Nombre">
            </div>
            <div class="relleno">
                <input class="campos" id="apellido" type="text" placeholder="Apellido">
            </div>
            <div class="relleno">
                <input class="campos" id="email" type="text" placeholder="Correo electrónico">
            </div>
            <div class="relleno">
                <input class="campos" id="telefono" type="number" placeholder="Número de celular">
            </div>
            <button id="boton_agregar" class="btn" type="button">Registrar</button>
        </form>
    </div>
</body>
</html>
