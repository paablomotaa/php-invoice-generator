<?php
require_once __DIR__ . '/../vendor/autoload.php';

// 1. Obtenemos la URL completa que visita el usuario
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// 2. Le quitamos la ruta de las carpetas locales para que el router no se confunda
$uri = str_replace('/facturador/public', '', $uri);

// 3. Ahora nuestro router funciona perfectamente
if ($uri === '/generar') {
    $controlador = new \App\Controllers\FacturaController();
    $controlador->generar();
} else {
    echo "<h1>Bienvenido al SaaS de Facturas</h1>";
    echo "<p>Haz clic aquí para <a href='/facturador/public/generar'>Generar el PDF</a>.</p>";
}