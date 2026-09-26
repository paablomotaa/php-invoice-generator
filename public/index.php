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
} elseif ($uri === '/' || $uri === '') {
    // Si la ruta está vacía (página principal), llamamos al nuevo controlador
    $controlador = new \App\Controllers\InicioController();
    $controlador->index();
} else {
    // Si escriben una URL que no existe
    echo "<h1>404 - Página no encontrada</h1>";
}