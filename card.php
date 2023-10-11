<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Bienvenido!</title>

    <link rel="preload" href="card.css" as="style">
    <link href="card.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>

    <div class="contenedor">
        
        <img src="icono.png" alt="icono">

        <h1>¡Gracias por registrate!</h1>

        <p class="bienvenido">Alumno</p>

        <div class="datos">
            <p class="nombre">Nombre: <span><?php echo $_POST["nombre"]?></span></p>
            <p class="apellido">Apellidos: <span><?php echo $_POST["apellido"]?></span></p>
            <p class="edad">Edad: <span><?php echo $_POST["edad"]?></span></p>
            <p class="correo">Correo: <span><?php echo $_POST["correo"]?></span></p>
        </div>
    </div>
    
</body>
</html>