<?php
// Le decimos a PHP dónde está este archivo
namespace App\Controllers;

// Importamos la librería de PDF
use Dompdf\Dompdf;

class FacturaController {
    
    public function generar() {
        // 1. Iniciamos la librería
        $dompdf = new Dompdf();
        
        // 2. Leemos el contenido de nuestra Vista (el HTML)
        ob_start();
        require_once __DIR__ . '/../Views/factura.php';
        $html = ob_get_clean();
        
        // 3. Le pasamos el HTML a DomPDF
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        // 4. Mostramos el PDF en el navegador
        $dompdf->stream("factura.pdf", ["Attachment" => false]);
    }
}