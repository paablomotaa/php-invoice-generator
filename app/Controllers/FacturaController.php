<?php

namespace App\Controllers;

use Dompdf\Dompdf;

class FacturaController {
    
    public function generar() {

        $dompdf = new Dompdf();
        

        ob_start();
        require_once __DIR__ . '/../Views/factura.php';
        $html = ob_get_clean();
        
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        $dompdf->stream("factura.pdf", ["Attachment" => false]);
    }
}
