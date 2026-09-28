<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>FactGen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav-logo">PHP invoice generator</div>
        <ul class="nav-links">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Mis Facturas</a></li>
            <li><a href="/facturador/public/contacto">Contacto</a></li>
        </ul>
    </nav>
    <video autoplay loop muted playsinline id="video-fondo">
        <source src="background.mp4" type="video/mp4">
        Tu navegador no soporta videos HTML5.
    </video>
    <div class="card1">
        <h1>Generador de facturas gratuito.</h1>
        <p>Rellena los siguientes datos para crear la factura en pdf: </p>
        <form action="">
            <div class="column">
                <label for="fname">NIF: </label>
                <input type="text" id="fname" name="fname" value=""><br><br>
                <label for="direction">Dirección: </label>
                <input type="text" id="lname" name="lname" value=""><br><br>
                <label for="direction">Fecha: </label>
                <input type="text" id="lname" name="lname" value=""><br><br>
            </div>
            <div class="row">
                <label for="lname">Nombre: </label>
                <input type="text" id="lname" name="lname" value=""><br><br>
                <label for="direction">Importe: </label>
                <input type="text" id="lname" name="lname" value=""><br><br>
            </div>
            <button class="button">
                Generar
                <div class="hoverEffect">
                    <div></div>
                </div>
            </button>
        </form>
        <p></p>
    </div>
</body>

</html>
