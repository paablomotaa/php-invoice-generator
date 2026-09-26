<?php
namespace App\Controllers;

class InicioController {
    public function index() {
        require_once __DIR__ . '/../Views/inicio.php';
    }
}