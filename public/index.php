<?php
require_once __DIR__ . '/../vendor/autoload.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = str_replace('/facturador/public', '', $uri);

if ($uri === '/generar') {
    $controlador = new \App\Controllers\FacturaController();
    $controlador->generar();
} elseif ($uri === '/' || $uri === '') {
    $controlador = new \App\Controllers\InicioController();
    $controlador->index();
} else {
    echo "<h1>404 - Página no encontrada</h1>";
}
